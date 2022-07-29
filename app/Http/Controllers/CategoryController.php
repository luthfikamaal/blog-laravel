<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category){
        return view('category.index',[
            'title' => 'Kategori '.$category->name,
            'posts' => Post::where('category_id', $category->id)->get()
        ]);
    }
}