<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Category;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->current = 'Video';
    }

    public function index() 
    {
        $data['current'] = $this->current;
        $videos = Video::paginate(8);
        $data['videos'] = $videos;
        return view('dashboard.video.index', $data);
    }

    public function create()
    {
        $data['categories'] = Category::all();
        return view('dashboard.video.create',$data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'url'=>'required|string',
            'category_id'=>'required',
            'title'=>'required|string',
            'language'=>'required|string',
            'sub_category'=>'nullable',
            'date_release'=>'required|string',
            'artists'=>'required|string',
            'description'=>'required|string',
            'duration'=>'required|string',
            'video_image'=>'required|string',
        ]);
        Video::create($validated);
        return redirect('/dashboard/video')->with('status', 'New Video Added!');
    }

    public function edit($id)
    {
        $video = Video::where('id', $id)->get()->first();
        $data['video'] = $video;
        $data['categories'] = Category::all();
        return view('dashboard.video.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'url'=>'required|string',
            'category_id'=>'required',
            'title'=>'required|string',
            'language'=>'required|string',
            'sub_category'=>'nullable',
            'date_release'=>'required|string',
            'artists'=>'required|string',
            'description'=>'required|string',
            'duration'=>'required|string',
        ]);
        Video::findOrFail($id)->update($validated);
        return redirect('/dashboard/video')->with('status', 'A Video Was Updated!');
    }

    public function destroy($id)
    {
        $video = Video::where('id', $id)->get()->first();
        $video->delete();
        return redirect('/dashboard/category')->with('status', 'A Video Was Deleted!');
    }
}
