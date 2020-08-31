<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Features;

use Session;

class FeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.features.index')->with('featured', Features::orderBy('created_at','desc')->paginate(8));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.features.create');
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
        ]);

        $featured = $request->featured;

        $featured_new_name = $featured->getClientOriginalName();

        $featured->move('uploads/features', $featured_new_name);

        $featured = Features::create([
            'title' => $request->title,
            'featured' => 'uploads/features/' . $featured_new_name,
        ]);
        Session::flash('success', 'Features Created Sucessfully.');

        return redirect()->route('features');

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
        $featured = Features::find($id);

        return view('admin.features.edit')->with('featured', $featured);
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
        ]);

        $featured = Features::find($id);

        if($request->hasFile('featured'))
       
        {

       $featured = $request->featured;

       $featured_new_name = $featured->getClientOriginalName();

       $featured->move('uploads/features/', $featured_new_name);

       $featured->featured = 'uploads/features/'.$featured_new_name;


        }

       $featured->title = $request->title;


       $featured->save();

       Session::flash('success','Features Updated Sucessfully');

       return redirect()->route('features');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $featured = Features::find($id);

        $featured->delete();

        Session::flash('success', 'Featured Deleted Sucessfully.');

        return redirect()->back();
    }

}
