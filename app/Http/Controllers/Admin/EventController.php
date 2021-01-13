<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index()
    {
        $events = Event::all();
        return view('admin.event.list',compact('events'));
    }


    public function create()
    {
        return  view('admin.event');
    }


    public function store(Request $request)
    {
        $events = new Event();
        $pro_file = $request->file('feature_image');
        $filename = time().'_'. $pro_file->getClientOriginalName();
        $path = public_path().'/admin/event';
        $pro_file->move($path,$filename);

        if($request->hasFile('images')){
            foreach ($request->file('images') as $image){
                $name = time().'_'.$image->getClientOriginalName();
                $image->move(public_path().'\admin\event',$name);
                $data[] =$name;
            }
            $events->images = json_encode($data);

        }
        $events->language = $request->input('language');
        $events->name = $request->input('name');
        $events->detail = $request->input('detail');
        $events-> feature_image   = $filename;
        $events->save();
        return redirect()->to('/event');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events =Event::where('id', $id)->get();
        return view('admin.event_other',compact('events'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::findOrFail($id);
        Return view('admin.event_edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // at the end i will do 
    }

    public function destroy($id)
    {
        $events = Event::findOrFail($id);
        $events->delete();
        return redirect()->back();
    }
}
