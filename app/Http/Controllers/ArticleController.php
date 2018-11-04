<?php

namespace App\Http\Controllers;

use App\Models as model;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $post = model\Article::getNewest();
        $category = model\Category::getAllCat();
        $data['post'] = $post;
        $data['category'] = $category;
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
        $result = model\Article::setNewArticle($title, $content);
    }

    public function show($id)
    {
        $post = model\Article::getArticle($id);
        //decode content to HTML
        $post['content'] = htmlspecialchars_decode($post['content']);
        $data['count'] = count($post);
        $data['post'] = $post;
        $category = model\Category::getAllCat();
        $data['category'] = $category;
        return view('post', $data);
    }

    public function update(Request $request, $id)
    {
        //
    }
}
