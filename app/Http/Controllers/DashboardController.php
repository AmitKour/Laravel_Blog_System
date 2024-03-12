<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;


use App\Models\User;

class DashboardController extends Controller
{
    public function index(){
        // $blog = new Blog([
        //     'title' => 'Default Title',
        //     'content' => 'Default Content',
        //     'date' => now()->toDateString(), // Set default value to current date
        // ]);

        $categories = Category::all();
        return view('shared.index',compact('categories'));
    }
    public function dashboard()
    {
        $lastFiveBlogs = Blog::orderBy('created_at', 'desc')->take(5)->get();
        $totalUsers = User::count();
        $totalBlogs = Blog::count();
        $activeBlogs = Blog::where('ispublish', true)->count();


        return view('dashboard', compact('totalUsers','lastFiveBlogs', 'totalBlogs', 'activeBlogs'));
    }

}
