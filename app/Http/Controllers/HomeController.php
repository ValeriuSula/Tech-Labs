<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

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
        $hw = 'Hello world!';
        $ms = 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.';
        $articles = Article::select(['title', 'description', 'img', 'id', 'text'])->get();
        //dump($articles);
        return view('index')->with([
            'hw' => $hw,
            'ms' => $ms,
            'articles' => $articles
        ]);
    }
}
