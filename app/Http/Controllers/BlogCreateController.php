<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogCreateController extends Controller
{
    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required|string',
        ]);

        // Extract ispublish value from the request
        $ispublish = $request->has('ispublish');

        // Create a new Blog instance with validated data and ispublish value
        $blog = new Blog([
            'title' => $validatedData['title'],
            'date' => $validatedData['date'],
            'ispublish' => $ispublish,
            'content' => $validatedData['content'],
        ]);

        // Save the Blog instance
        $blog->save();

        // Redirect back with success message
        return redirect()->route('dashboard');
    }
}
