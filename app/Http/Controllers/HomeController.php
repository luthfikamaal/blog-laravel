<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $limitPost = 10;
        $nPage = ceil(Post::all()->count()/$limitPost);
        return view('home.index',[
            'title' => 'Home',
            'authors' => Author::all(),
            'posts' => Post::limit($limitPost)->get(),
            'categories' => Category::all(),
            'nPage' => $nPage,
            'activePage' => 1
        ]);
    }
    public function pagination($n){
        $limitPost = 10;
        $nPage = ceil(Post::all()->count()/$limitPost);
        if($n > $nPage){
            abort(404);
        }
        $activePage = $n ? $n : 1;
        $firstData = $limitPost * $n - $limitPost;
        $posts = Post::skip($firstData)->limit($limitPost)->get();
        return view('home.index', [
            'title' => 'Post',
            'posts' => $posts,
            'timeNow' => Carbon::now()->toDateTimeString(),
            'nPage' => $nPage,
            'activePage' => $activePage
        ]);
    }
    public function search(Request $request){
        $link = "/".$request->search;
        return redirect('/search'.$link);
    }
    public function searched($keyword){
        $posts = Post::where('title', 'like', '%'.$keyword.'%')->get();
        $limitPost = 10;
        $nPage = ceil($posts->count()/$limitPost);
        return view('home.index', [
            'title' => 'Search '.$keyword,
            'posts' => $posts,
            'keyword' => $keyword,
            'nPage' => $nPage,
            'activePage' => 1
        ]);
    }
}