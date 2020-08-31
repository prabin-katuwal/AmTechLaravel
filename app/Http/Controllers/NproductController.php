<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nproduct;

use Session;

class NproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.nproduct.index')->with('nproduct', Nproduct::orderBy('created_at','desc')->paginate(8));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nproduct.create');
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

        $featured->move('uploads/nproduct', $featured_new_name);

        $featured = Nproduct::create([
            'title' => $request->title,
            'featured' => 'uploads/nproduct/' . $featured_new_name,
        ]);
        Session::flash('success', 'New Product Created Sucessfully.');

        return redirect()->route('nproduct');
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
        $nproduct = Nproduct::find($id);

        return view('admin.nproduct.edit')->with('nproduct', $nproduct);
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

        $nproduct = Nproduct::find($id);

        if($request->hasFile('featured'))
       
        {

       $featured = $request->featured;

       $featured_new_name = $featured->getClientOriginalName();

       $featured->move('uploads/nproduct/', $featured_new_name);

       $nproduct->featured = 'uploads/nproduct/'.$featured_new_name;


        }

       $nproduct->title = $request->title;


       $nproduct->save();

       Session::flash('success','Nprocuct Updated Sucessfully');

       return redirect()->route('nproduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nproduct = Nproduct::find($id);

        $nproduct->delete();

        Session::flash('success', 'Nproduct Deleted Sucessfully.');

        return redirect()->back();
    }
}
