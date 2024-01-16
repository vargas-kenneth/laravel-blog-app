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

        $posts->each(function($post) {
            $post->time_posted = $post->updated_at->diffForHumans();

            if ($post->updated_at->diffInHours(Carbon::now()) > 24) {
                $carbonDate = Carbon::parse($post->updated_at);
                $post->time_posted = $carbonDate->format('F j, Y g:i A');
            }

            $post->img_full_path = $post->postImage->image_path . $post->postImage->image_name;
        });

        // Limit the post when using eager loading
        $limitPost = $posts->take(10);
        $data = ['posts' => $limitPost];

        return view('home', $data);
    }
}
