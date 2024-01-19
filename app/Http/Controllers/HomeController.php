<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $posts = Post::latest('updated_at')->get()->take(10);
        // Eager loading
        $posts = Post::with('user:id,name', 'postImage', 'tag')->latest('updated_at')->get();

        // Limit the post when using eager loading
        $limitPost = $posts->take(10);
        $data = ['posts' => $limitPost];

        return view('home', $data);
    }
}
