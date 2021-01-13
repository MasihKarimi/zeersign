<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{ public function index()
    {
        $authors = Author::all();
        return view('admin.author_show', compact('authors'));
    }

   
    public function create()
    {
        return  view('admin.author');
    }

   
    public function store(Request $request)
    {
       
        $pro_file = $request->file('image');
        $filename = time().'_'. $pro_file->getClientOriginalName();
        $path = public_path().'/admin/author';
        $pro_file->move($path,$filename);

        $authors = new Author();
        $authors->language = $request->input('language');
        $authors->name = $request->input('name');
        $authors->detail = $request->input('detail');
        $authors->image = $filename;
        $authors->save();
        return redirect()->to('/admin/auth');
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $authors = Author::findOrFail($id);
        Return view('admin.author_edit', compact('authors'));
    }

   
    public function update(Request $request, $id)
    {
        $authors = Author::findOrFail($id);

        if ($file = $request->hasFile('image')) {
            $agendafile = public_path("admin/author/{$authors->image}"); // get previous image from folder
            if (File::exists($agendafile)) { // unlink or remove previous image from folder
                unlink($agendafile);
            }
            $file = $request->file('image');
            $name = time() . $file->getClientOriginalName();
            $file = $file->move(('admin/author/'), $name);
            $authors->image = $name;
        }
        $authors->name = $request->input('name');
        $authors->detail = $request->input('detail');
        $authors->save();
        return redirect()->to('/admin/auth');
    }


    public function destroy($id)
    {
        $authors = Author::findOrFail($id);
        $authors->delete();
        return redirect()->back();
    }
}
