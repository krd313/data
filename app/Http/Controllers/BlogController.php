<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'status' => 'required',

        ]);
        $data['user_id'] = 1   ;

        // Banner image
        $imageName = NULL;

        if($request->image != NULL) {

            $imageObject = $request->image;

            $imageExtension = $imageObject->getClientOriginalExtension();
            $newImageName = time().'.'.$imageExtension;
            $imageObject->move(public_path('images'), $newImageName);
            $imageName = $newImageName;

        }

        $data['banner_image'] = $imageName;

        Blog::create($data);

        return to_route('blog.index')->with('success', 'Blog created successfully.');

        // echo '<pre>';

        // print_r($request->all());

        // echo 'Form Submitted Successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'status' => 'required',

        ]);



        if($request->banner_image != NULL) {

            $imageName = NULL;

            $imageObject = $request->banner_image;

            $imageExt = $imageObject->getClientOriginalExtension();
            $newImageName = time().'.'.$imageExt;
            $imageObject->move(public_path('images'), $newImageName);
            $imageName = $newImageName;
            $data['banner_image'] = $imageName;

        }



        $blog->update($data);

        return to_route('blog.show', $blog)->with('success', 'Blog updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return to_route('blog.index')->with('success', 'Blog deleted successfully.');
    }
}
