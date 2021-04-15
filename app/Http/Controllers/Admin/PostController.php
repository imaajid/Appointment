<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            
            $posts = Post::all(); 
            return view('backend.posts.index', compact('posts'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('backend.posts.create');
        } catch (\Exception $e) {
            return $e->getMessage();
        } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title'=> 'required|max:30',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,jpe,gif,svg|max:2048',
       ]);
       $input = $request->all();    
     
       if ($files = $request->file('image')) {
        $destinationPath = 'posts/'; // upload path
        $extension = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $extension);
        $input['image'] = "$extension";
    }
         Post::create($input);

        return redirect()->route('posts.index')->with('success', 'posts is successfully saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $posts = Post::findOrFail($id);
            
            return view('backend.posts.edit', compact('posts'));
        } catch (\Exception $e) {
            return $e->getMessage();
        } 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $input = $request->all();    
     
        if ($files = $request->file('image')) {
         $destinationPath = 'posts/'; // upload path
         $extension = date('YmdHis') . "." . $files->getClientOriginalExtension();
         $files->move($destinationPath, $extension);
         $input['image'] = "$extension";
     }
        $post->update($input);  
            
            return redirect()->route('posts.index')->with('success', 'posts successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
         
            Post::find($id)->delete();
            return redirect()->route('posts.index')->with('success', 'posts deleted successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
