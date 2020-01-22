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
        DB::table('posts')->truncate();

        Post::create([
            'title' => "Book Review: Laravel: Up and Running",
            'content' => "The run method begins by executing the Laravel Query Builder’s truncate method (you’ll learn
            more about the Query Builder later in this chapter). The truncate method will not only delete
            any records currently found in the events table",
        ]);

        Post::create([
            'title' => "Book Review: Code Smart",
            'content' => "The corresponding UsersTableSeeder.php file doesn’t actually exist, but if it did it would be found
            in the database/seeds/ directory. Let’s create a seeder for adding a few events to the database. You
            can create the seeder skeleton using the make:seed command:",
        ]);


    }
}
