<?php

namespace App\Http\Controllers;

use App\Article;
use App\Author;
use App\Category;
use Illuminate\Http\Request;
use App\Tag;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->language = \LaravelLocalization::getCurrentLocale() == 'en' ? 'English' : (\LaravelLocalization::getCurrentLocale() == 'fa' ? 'Dari' : 'Pashto');

    }
    public function index()
    {
      $articles = Article::where('language', $this->language)->latest()->get();
      $arti = Article::where('language', $this->language)->latest()->limit(1)->get();
      $categories = Category::where('language', $this->language)->get();
      $tags = Tag::where('language', $this->language)->get();
      $authors = Author::where('language', $this->language)->get();
      $artic = Article::where('language', $this->language)->take(2)->get();
      return view ('welcome', compact('articles', 'arti','categories','tags','authors','artic'));
    }

    public function about()
    {
        return view('contact');
    }
    
    public function ArticleSingle($id)
    {
        $articles = Article::where('id', $id)->get();
       // $ser = Service::where('language', $this->language)->get();
        return view('article_single',compact('articles'));

    }
   
}
