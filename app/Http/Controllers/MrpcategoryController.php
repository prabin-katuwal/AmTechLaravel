<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mrpcategory;

use Session;

class MrpcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mrpcategory.index')->with('mrpcategory',  Mrpcategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mrpcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        
        $mrpcategory = new mrpcategory;

        $mrpcategory->name = $request->name;

        $mrpcategory->save();

        Session::flash('success', 'MrPcategory Created Sucessfully.');

        return redirect()->route('mrpcategory');
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
        $mrpcategory = Mrpcategory::find($id);
        
        return view('admin.mrpcategory.edit')->with('mrpcategory', $mrpcategory);
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
            'name'=> 'required',
        ]);

        $mrpcategory = Mrpcategory::find($id);


       $mrpcategory->name = $request->name;

       $mrpcategory->save();;


       Session::flash('success','Mrpcateory Updated Sucessfully');

       return redirect()->route('mrpcategory');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mrpcategory = Mrpcategory::find($id);

        foreach($mrpcategory->mrp as $p){

           $p->forceDelete();
       }

       $mrpcategory->delete();

       Session::flash('success', 'Mrpcategory Deleted.');

       return redirect()->route('mrpcategory');
 
    }
}
