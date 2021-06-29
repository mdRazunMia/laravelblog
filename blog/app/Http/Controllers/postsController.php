<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use Posts as GlobalPosts;
use Symfony\Component\Console\Input\Input;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new posts;

        $posts->title = $request->title;
        $posts->content = $request->content;
        $posts->save();

        return redirect('/show')->with('status','Post has been inserted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(posts $posts)
    {
        $posts= posts::all();
        return view('posts.show',['posts'=>$posts]);
    }


    //delete the post info

    public function delete($id){
        $post = posts::find($id);
        $post->delete();

        return redirect('/show')->with('status','Post has been deleted successfully');
    }


    //get edit post info and pass to the edit_data page to set into the  form field 

    public function editData($id){
        $post = posts::find($id);
        return view('posts.edit_data',['post'=>$post]);
    }


    //insert the updated post data into the database table posts

    public function updateData(Request $request){
        $post= Posts::find($request->id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect('/show')->with('status','Post has updated successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(posts $posts)
    {
        //
    }
}
