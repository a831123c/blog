<?php

use Illuminate\Database\Seeder;
use App\Models;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Article::truncate();
        for ($x=1;$x<=20;$x++) {
            \App\Models\Article::create([
                'title' => "測試假文章".$x,
                'content' => '內容測試'.$x,
                'post_date' => \Carbon\Carbon::now()->addDays(rand(1, 20)),
            ]);
        }
    }
}
