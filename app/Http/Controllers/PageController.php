<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function __construct()
    {
        $categories = Category::all();

        View::share(['categories' => $categories]);
    }
    public function index()
    {
        $latest_articles = Article::latest()->take(5)->get();
        return view('index', compact('latest_articles'));
    }
}
