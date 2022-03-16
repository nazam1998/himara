<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Carousel;
use App\Models\CategoryArticle;
use App\Models\Tag;
use App\Models\TagArticle;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $carousels = Carousel::all();
        return view('pages.welcome', compact('carousels'));
    }

    public function rooms()
    {
        return view('pages.rooms');
    }

    public function gallery()
    {
        return view('pages.gallery');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function blog()
    {
        $categories = CategoryArticle::all();
        $tags = Tag::all();
        $articles = Article::all();
        return view('pages.blog', compact('categories', 'tags', 'articles'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function search(Request $request)
    {
        $categories = CategoryArticle::all();
        $tags = Tag::all();
        $articles = Article::where('name', 'LIKE', '%' . $request->name . '%')->get();
        return view('pages.blog', compact('categories', 'tags', 'articles'));
    }

    public function searchByCat($id)
    {
        $categories = CategoryArticle::all();
        $tags = Tag::all();
        $articles = Article::where('category_article_id', $id)->get();
        return view('pages.blog', compact('categories', 'tags', 'articles'));
    }
}
