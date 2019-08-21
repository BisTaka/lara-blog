<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->user_id = 2;
        $post->title = "Laravel Seeders";
        $post->body = "Laravel mencakup metode yang sederhana untuk memasukan data ke database dengan test data";
        $post->save();

        $post = new Post();
        $post->user_id = 2;
        $post->title = "Laravel Migration";
        $post->body = "Laravel mencakup metode yang sederhana untuk migrasi data ke database dengan test data";
        $post->save();
    }
}
