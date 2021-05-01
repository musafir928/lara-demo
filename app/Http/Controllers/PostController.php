<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->current = 'Post';
    }

    public function index()
    {
        $data['current'] = $this->current;
        $posts = Post::paginate(8);
        $data['posts'] = $posts;
        return view('dashboard.post.index', $data);
    }

    public function create()
    {
        $data['categories'] = Category::all();
        return view('dashboard.post.create', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'language' => 'required',
            'sub_category' => 'nullable',
            'content' => 'required',
            'description' => 'required',
            'is_popular' => 'required',
            'post_image' => 'required',
        ]);
        $post = Post::create($validated);
        return redirect('/dashboard/post')->with('status', 'New Post Added!');
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->get()->first();
        $data['post'] = $post;
        $data['categories'] = Category::all();
        return view('dashboard.post.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'language' => 'required',
            'sub_category' => 'nullable',
            'content' => 'required',
            'description' => 'required',
            'is_popular' => 'required',
            'post_image' => 'required',
        ]);
        Post::findOrFail($id)->update($validated);
        return redirect('/dashboard/post')->with('status', 'A Post Was Updated!');
    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->get()->first();
        $post->delete();
        return redirect('/dashboard/category')->with('status', 'A post Was Deleted!');
    }
}


// if (!is_null($post)) {
//     return back()->with("success", "Success! Post created");
// } else {
//     return back()->with("failed", "Failed! Post not created");
// }