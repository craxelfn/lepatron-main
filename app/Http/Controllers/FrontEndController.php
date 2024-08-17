<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function homepage() {
        return view("frontend.pages.home.index");
    
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
