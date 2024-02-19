<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ArticleController extends Controller
{
    public function index()
    {
        $response = Http::get('http://167.99.71.244:8080/articles');
        $articles = $response->json();
        return view('index', ['articles' => $articles]);
    }

    public function store(Request $request)
    {
        $response = Http::post('http://167.99.71.244:8080/articles', [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'author' => $request->input('author'),
            'image_url' => $request->input('image_url'),
        ]);
        return redirect('/');
    }
}
