<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Test
{
    protected $table = "article";

    public static function getNewest()
    {
        $result = self::orderBy('post_date', 'DESC')->limit(3)->get()->toArray();
        return $result;
    }
    
    public static function getArticle($id)
    {
        $result = self::where('id', $id)->first()->toArray();
        return $result;
    }
    public static function setNewArticle($title, $content)
    {
        $new = array(
            'title' => $title,
            'content' => $content,
            'post_date' => date('Y-m-d H:i:s')
        );
        return self::insert($new);
    }
}
