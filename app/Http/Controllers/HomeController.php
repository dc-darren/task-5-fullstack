<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $this->articles();
    }

    public function articles() {
        return view('article/show', ['articles' => ArticleResource::collection(Article::all())]);
    }

    public function addArticle() {
        return view('article/add', ['categories' => CategoryResource::collection(Category::all())]);
    }

    public function updateArticle($article) {
        return view('article/update', [
            'article' => $article,
            'categories' => CategoryResource::collection(Category::all())
        ]);
    }

    public function categories() {
        return view('category/show', ['categories' => CategoryResource::collection(Category::all())]);
    }

    public function addCategory() {
        return view('category/add');
    }

    public function updateCategory($category) {
        return view('category/update', ['category' => $category]);
    }
}
