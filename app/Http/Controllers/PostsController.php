<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

use Auth;

use File;

use Storage;

use Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts', Post::orderBy('created_at','desc')->paginate(8));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        if($categories->count() == 0 )
        {
            Session::flash('info', 'You must have some categories  before attemting to create post.');

            return redirect()->back();
        }



        return view('admin.posts.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request ,[
            'title' => 'required',
            'featured' => 'required|image',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $featured = $request->featured;

        $featured_new_name = $featured->getClientOriginalName();

        $featured->move('uploads/posts', $featured_new_name);

        $post = Post::create([
            'title' => $request->title,
            'slug' => str_replace(' ', '-', $request->title),
            'featured' => 'uploads/posts/' . $featured_new_name,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'user_id' => Auth::id()

        ]);

        Session::flash('success', 'Post Created Sucessfully.');

        return redirect()->route('posts');


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
        $post = Post::find($id);

        return view('admin.posts.edit')->with('post', $post)
                                      ->with('categories', Category::all())
                                      ->with('tags', Tag::all( ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'=> 'required',
            'content' => 'required',
            'category_id' => 'required'


        ]);

        $post = Post::find($id);

        if($request->hasFile('featured'))

        {

       $featured = $request->featured;

       $featured_new_name = $featured->getClientOriginalName();

       $featured->move('uploads/posts/', $featured_new_name);

       $post->featured = 'uploads/posts/'.$featured_new_name;


        }

       $post->title = $request->title;

       $post->content = $request->content;

       $post->category_id = $request->category_id;

       $post->save();;


       Session::flash('success','Post Updated Sucessfully');

       return redirect()->route('posts');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::find($id);


        $post->delete();

        Session::flash('success', 'Post was just Trash.');

        return redirect()->back();
    }

    public function trashed()
    {
        $posts = Post::onlyTrashed()->get();

        return view('admin.posts.trashed')->with('posts', $posts);
    }

    public function kill($id)
    {
        $posts = Post::withTrashed()->where('id', $id)->first();

        $posts->forceDelete();

        Session::flash('success', 'Post deleted Permanently.');

        return redirect()->route('posts.trashed');

    }


public function restore($id)
    {
        $post = Post::withTrashed()->where('id', $id)->first();

        $post->restore();

        Session::flash('success','Post restore Sucessfully');

        return redirect()->route('posts.trashed');
    }



}
