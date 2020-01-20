<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = [
            'Laravel Hacking & Coffee',
            'IoT with Raspbery Pi',
            'Free Vue.js Lessons'
        ];
        return view('posts.index')->with('posts', $posts);
    }
    public function show($id)
    {
        return view('posts.show')
            ->with('id', $id)
            ->with('name', 'Laravel Hacking & Coffee');
    }

    public function category($category, $subcategory = 'all')
    {
        dd("Category: {$category} Subcategory: {subcategory}");
    }
}
