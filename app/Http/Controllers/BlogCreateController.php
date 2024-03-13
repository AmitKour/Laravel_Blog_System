<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
// use App\Models\Category;
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
            'category_id' => 'required|exists:categories,id'
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
            'picture_url'=>$img_url,
            'category_id' => $validatedData['category_id']
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
        $categories = Category::all();
        $blog = Blog::findOrFail($id);

        return view('shared.edit', compact('categories', 'blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            // 'ispublish' => 'nullable|boolean',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->date = $request->input('date');
        $blog->ispublish = $request->has('ispublish') ? true : false;
        $blog->content = $request->input('content');
        $blog->category_id = $request->input('category_id');
        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully');
    }
public function destroy($id)
{

    $blog = Blog::findOrFail($id);
    $blog->delete();

    return redirect()->back()->with('success', 'Blog post deleted successfully');
}

public function indexPublic()
{
    $blogs = Blog::all();
    return view('blogs.public', compact('blogs'));
}
public function about()
{
    return view('blogs.about');
}

public function contact()
{
    return view('blogs.contact');
}

public function show($id = null, Category $category = null)
{
    if ($id) {
        // If an ID is provided, fetch the blog by ID
        $blog = Blog::findOrFail($id);
        $category = $blog->category;
        $blogs = Blog::where('category_id', $blog->category_id)
                     ->where('id', '!=', $id)
                     ->take(5)
                     ->get();
    } elseif ($category) {
        // If a category is provided, fetch blogs by category
        $blogs = Blog::where('category_id', $category->id)
                     ->take(5)
                     ->get();
    } else {
        // Handle case where neither ID nor category is provided
        abort(404);
    }

    // Fetch remaining blogs if count is less than 5
    if ($blogs->count() < 5) {
        $remainingBlogs = Blog::where('category_id', '!=', $category->id)
                              ->orderBy('created_at', 'desc')
                              ->take(5 - $blogs->count())
                              ->get();
        $blogs = $blogs->merge($remainingBlogs);
    }

    return view('blogs.show', compact('blog', 'blogs', 'category'));
}


}
