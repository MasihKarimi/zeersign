<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view ('admin.tag',compact('tags'));
    }

    public function create()
    {
        
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new Tag();
        $tag-> language = $request->input('language');
        $tag-> name = $request->input('name');
        $tag->save();
        return redirect()->to('/admin/tag');
    }
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
       // $tags = Tag::findOrFail($id);

       // return view('admin.category_update',compact('category'));

    }


    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->name = $request->input('name');
        $tag->save();
        return redirect()->to('/admin/tag');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->back();
    }
}
