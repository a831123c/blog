<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i <= 20; $i++){
            \App\Models\Article::create([
                'title' => "測試假文章".$i,
                'content' => "內容測試",
                'post_date' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
