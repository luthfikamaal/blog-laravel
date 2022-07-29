<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        return view('author.index', [
            'title' => 'Author',
            'authors' => Author::all()
        ]);
    }

    public function show(Author $author){
        return view('author.show', [
            'title' => 'Artikel oleh '.$author->name,
            'posts'=> Post::where('author_id', $author->id)->get(),
            'author' => $author
        ]);
    }
}