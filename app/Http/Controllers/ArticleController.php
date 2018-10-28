<?php

namespace App\Http\Controllers;

use App\Models\Article as Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $post = Article::getNewest();
        $data['post'] = $post;
        return view('post', $data);
    }

    public function create()
    {
        return view('newpost');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $post = Article::getArticle($id);
        $data['count'] = count($post);
        $data['post'] = $post;
        return view('post', $data);
    }

    public function update(Request $request, $id)
    {
        //
    }
}
