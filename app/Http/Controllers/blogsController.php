<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class blogsController extends Controller
{
    public function index()
    {
        return view('blogs.create');
    }

    public function create()
    {
        return view('blogs.create');
    }

   public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'list' => 'required',
            'category' => 'required'
       ]);

        $blog = new Blog();
        $blog->name = $request->input('name');
        $blog->description = $request->input('description');
        $blog->list = $request->input('list');
        $blog->category = $request->input('category');

        $blog->save();

        return redirect()->route('home');
   }
}
