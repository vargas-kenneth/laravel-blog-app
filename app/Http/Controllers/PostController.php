<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect()->route('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:posts',
            'content' => 'required',
            'tag' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $user = Auth::user();
        $uuid = Str::uuid();

        $post = $user->posts()->create([
            'uuid' => $uuid,
            'title' => $validated['title'],
            'content' => $validated['content'],
            'slug' => Str::slug($validated['title']),
        ]);

        $image = $request->file('image');
        $userFullname = Str::slug($user->name, '_');
        $imagePath = 'user_images/' . $userFullname . '/post_images/';
        $imageName = $uuid . '_' . $image->getClientOriginalName();
        $image->storeAs($imagePath, $imageName, 'local');

        $post->postImage()->create([
            'user_id' => $user->id,
            'image_path' => $imagePath,
            'image_name' => $imageName,
            'image_alt' => $post->title,
        ]);

        $post->tag()->create([
            'tag_name' => $validated['tag'],
        ]);

        return to_route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                Rule::unique('posts')->ignore($post->post_id, 'post_id'),
            ],
            'content' => 'required',
            'tag' => 'required',
            'image' => [
                Rule::requiredIf($request->hasFile('image')),
                'image',
                'mimes:jpeg,png,jpg,gif',
                // 'max:2048',
            ],
        ]);

        $uuid = $post->uuid;

        $post->update([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'slug' => Str::slug($validated['title']),
        ]);
        
        // Handle Post Image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $postImage = $post->postImage;

            $imageName = $uuid . '_' . $image->getClientOriginalName();
            $image->storeAs($postImage->image_path, $imageName, 'local');

            Storage::delete($post->image_full_path);

            $imageAttr = [
                'image_name' => $imageName,
            ];
            
            if ($post->title !== $validated['title']) {
                $imageAttr['image_alt'] = $validated['title'];
            }

            $post->postImage()->update($imageAttr);
        }

        $post->tag()->update([
            'tag_name' => $validated['tag'],
        ]);

        return to_route('posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image_full_path);
        $post->postImage()->delete();
        $post->tag()->delete();
        $post->delete();

        return to_route('home');
    }
}
