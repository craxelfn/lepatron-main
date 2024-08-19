<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function homepage() {
        $latest_news = Post::orderBy("created_at", "desc")->take(3)->get();
        
        // Get distinct articles grouped by category_id
        $articles_slider = Post::select('category_id', 'title','body','created_at','image')
                               ->groupBy('category_id', 'title' ,'body','created_at','image')
                               ->take(5)
                               ->get();
        $trend_news = Post::orderBy("views_count", "desc")->first() ; 
        $trending_news = Post::orderBy("views_count", "desc")->where('id','!=',$trend_news->id)->take(3)->get();
        $alaune_news = Post::orderBy("created_at", "desc")->where('category_id',1)->take(3)->get();
        $entreprise_news = Post::orderBy("created_at", "desc")->where('category_id',2)->take(4)->get();
        $economie_finance = Post::orderBy("created_at", "desc")->where('category_id',3)->take(3)->get();
        $tourisme = Post::orderBy("created_at", "desc")->where('category_id',4)->take(4)->get();
        $agenda = Post::orderBy("created_at", "desc")->where('category_id',5)->take(3)->get();
        $business = Post::orderBy("created_at", "desc")->where('category_id',6)->take(4)->get();
        $nomination = Post::orderBy("created_at", "desc")->where('category_id',7)->take(3)->get();
        return view("frontend.pages.home.index", [
            'latest_news' => $latest_news, 
            'articles_slider' => $articles_slider , 
            'trend_news' => $trend_news , 
            'trending_news'=>$trending_news, 
            'alaune_news' => $alaune_news ,
            'entreprise_news'=> $entreprise_news,
            'economie_finance' => $economie_finance ,
            'tourisme' => $tourisme , 
            'agenda' => $agenda , 
            'business' => $business ,
            'nomination' => $nomination




            
        ]);
    }
    
    public function category($category){ 
        $categorie = Category::where("slug",$category)->first() ; 
        try { 
            $articles = Post::where("category_id",$categorie->id)->paginate(1) ;
        }catch(Exception $e ){ 
            abort(404); 
        }
        $latest_news  = Post::orderBy("created_at","desc")->get() ; 
        return view("frontend.pages.category.index",[
            "category" => $categorie,
            "articles" => $articles
         ]) ; 
    }
    public function article($category, $article  ,  $id) {
        $article = Post::findOrFail($id) ; 
        return view("frontend.pages.article.index", [
            "article"=> $article, 
        ]);
        
        
    
    }
}
