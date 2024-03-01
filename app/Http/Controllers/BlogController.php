<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog = new Blog([
            'title' => 'Default Title',
            'content' => 'Default Content',
            'date' => now()->toDateString(), // Set default value to current date
        ]);

        // Don't Save the Blog instance
        //$blog->save();


        return view('shared.index',[
            'blogs'=>Blog::orderBy('created_at','DESC')->get()
        ]);
    }
}
