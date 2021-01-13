<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
       $videos = Video::all();
       return view('admin.video_list', compact('videos'));
    }

  
    public function create()
    {
        return view('admin.video');
    }

   
    public function store(Request $request)
    {
        $video = new Video();
        $video->language = $request->input('language');
        $video->title = $request->input('title');
        $video->link = $request->input('link');
        $video->detail = $request->input('detail');
        $video->save();
        return redirect()->to('/admin/video');
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $videos = Video::findOrFail($id);
        Return view('admin.video_edit', compact('videos'));
    }

   
    public function update(Request $request, $id)
    {
        $videos = Video::findOrFail($id);
        $videos->title = $request->input('title');
        $videos->link = $request->input('link');
        $videos->save();
        return redirect()->to('/admin/video');
    }

   
    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
        return redirect()->back();
    }
}
