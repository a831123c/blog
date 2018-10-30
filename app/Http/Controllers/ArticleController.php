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
        $title = $request->input('title');
        //change content to html entity
        $content = htmlspecialchars($request->input('editor'));
        $result = Article::setNewArticle($title, $content);
    }

    public function show($id)
    {
        $post = Article::getArticle($id);
        //decode content to HTML
        $post['content'] = htmlspecialchars_decode($post['content']);
        $data['count'] = count($post);
        $data['post'] = $post;
        return view('post', $data);
    }

    public function update(Request $request, $id)
    {
        //
    }
}
