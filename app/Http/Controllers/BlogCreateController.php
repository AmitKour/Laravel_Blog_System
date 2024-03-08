<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Session;
class BlogCreateController extends Controller
{
    public function store(Request $request)
    {

        // Validate request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required',
            'ispublish'=>'nullable',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB

        ]);

        /**
         * Convert the boolean isPublish
         */

         if($validatedData['ispublish']=='on'
         ){
            $validatedData['ispublish']=true;
         }
         else{
            $validatedData['ispublish']=false;
         }





        $image = $request->file('photo');

        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads'), $imageName);


        $img_url = 'uploads/' . $imageName;

          $blog = new Blog([
            'title' => $validatedData['title'],
            'date' => $validatedData['date'],
            'ispublish' => $validatedData['ispublish'],
            'content' => $validatedData['content'],
            'picture_url'=>$img_url

        ]);

        $blog->save();

        //Session::flash('success', 'Blog added successfully');

        // Redirect back with success message
        return redirect()->route('dashboard')->with('success','Blog added successfully.');
    }


    public function index()
    {
        $blogs = Blog::all();

        $blogs = Blog::paginate(5);

        return view('shared.blogs', compact('blogs'));
    }


    public function edit($id)
{
    $blog = Blog::findOrFail($id);
    return view('shared.edit', compact('blog'));
}

public function update(Request $request, $id)
{
    $blog = Blog::findOrFail($id);


    $request->validate([
        'title' => 'required|string|max:255',
        'date' => 'required|date',
        'ispublish' => 'nullable|boolean',
        'content' => 'required',

    ]);


    $blog->update([
        'title' => $request->input('title'),
        'date' => $request->input('date'),
        'ispublish' => $request->has('ispublish'), // Convert checkbox value to boolean
        'content' => $request->input('content'),

    ]);


    return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
}

public function destroy($id)
{

    $blog = Blog::findOrFail($id);
    $blog->delete();

    return redirect()->back()->with('success', 'Blog post deleted successfully');
}

}
