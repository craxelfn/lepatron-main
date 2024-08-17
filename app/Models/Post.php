<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['author_id','category_id','title','seo_title','excerpt','body','image','alt','slug','meta_description','meta_keywords','tags','status','featured','nb_vues','source_text','source_link','planned','order_post','lien_video','video_youtube','publication_date','afficher_news'];

    public function user() {
        return $this->belongsTo(User::class, 'author_id');
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function scopeSearch($query, $term){
        $query->where(function ($query) use ($term){
            $query->where('title','like', "%$term%")
                ->orWhere('seo_title','like', "%$term%")
                ->orWhere('source','like', "%$term%");
        });
    }

}