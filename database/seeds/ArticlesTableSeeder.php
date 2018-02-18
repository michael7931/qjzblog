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
        DB::table('articles')->delete();
        DB::table('articles')->insert([
            0 =>[
                'id' => 1,
                'category_id' => 1,
                'title' => ' 测试文章',
                'author' => '曲家震',
                'markdown' => '测试内容2',
                'html' => '测试内容1',
                'description' => '测试描述',
                'keywords' => 'laravel,thinkphp, 教程',
                'cover' => '/uploads/article/5958ab4dd9db4.jpg',
                'is_top' => 1,
                'click' => 666,
                'created_at' => '2017-7-16 07:35:12',
                'updated_at' => '2016-7-16 07:35:12',
                'deleted_at' => NULL,
            ],
        ]);
    }
}
