<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Njob;

use Session;

class NjobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.njob.index')->with('njob', Njob::orderBy('created_at','desc')->paginate(8));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.njob.create');
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
            'featured' => 'required|image'
        ]);

        $featured = $request->featured;

        $featured_new_name = time(). $featured->getClientOriginalName();

        $featured->move('uploads/njob', $featured_new_name);

        $njob = Njob::create([
            'title' => $request->title,
            'featured' => 'uploads/njob/' . $featured_new_name

        ]);   

        Session::flash('success', 'NewsPaper Job Created Sucessfully.');

        return redirect()->route('njob');
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
        $njob = Njob::find($id);

        return view('admin.njob.edit')->with('njob', $njob);
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
            'title'=> 'required'     
        ]);

        $njob = Njob::find($id);

        if($request->hasFile('featured'))
       
        {

       $featured = $request->featured;

       $featured_new_name = time().$featured->getClientOriginalName();

       $featured->move('uploads/njob/', $featured_new_name);

       $njob->featured = 'uploads/njob/'.$featured_new_name;


        }

       $njob->title = $request->title;


       $njob->save();

       Session::flash('success','Newspaper Job Updated Sucessfully');

       return redirect()->route('njob');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $njob = Njob::find($id);

        $njob->delete();

        Session::flash('success', 'Newspaper Job Item Sucessfully Deleted.');

        return redirect()->back();
    }
}
