<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Fproduct;

use Session;

class FproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fproduct.index')->with('fproduct', Fproduct::orderBy('created_at','desc')->paginate(8));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fproduct.create');
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

        $featured->move('uploads/fproduct', $featured_new_name);

        $featured = Fproduct::create([
            'title' => $request->title,
            'featured' => 'uploads/fproduct/' . $featured_new_name,
        ]);
        Session::flash('success', 'Featured Product Created Sucessfully.');

        return redirect()->route('fproduct');
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
        $fproduct = Fproduct::find($id);

        return view('admin.fproduct.edit')->with('fproduct', $fproduct);
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

        $fproduct = Fproduct::find($id);

        if($request->hasFile('featured'))
       
        {

       $featured = $request->featured;

       $featured_new_name = $featured->getClientOriginalName();

       $featured->move('uploads/fproduct/', $featured_new_name);

       $fproduct->featured = 'uploads/fproduct/'.$featured_new_name;


        }

       $fproduct->title = $request->title;


       $fproduct->save();

       Session::flash('success','Fprocuct Updated Sucessfully');

       return redirect()->route('fproduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fproduct = Fproduct::find($id);

        $fproduct->delete();

        Session::flash('success', 'Fproduct Deleted Sucessfully.');

        return redirect()->back();
    }
}
