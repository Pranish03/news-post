<?php

namespace App\Http\Controllers;

use App\Models\Advertise;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function __construct()
    {
        $categories = Category::where('status', true)->get();

        View::share(['categories' => $categories]);
    }
    public function index()
    {
        $articles = Article::where('status', true)->latest()->get();
        $advertises = Advertise::where('expire_date', '>=', today())->get();

        return view('index', compact('articles', 'advertises'));
    }
}
