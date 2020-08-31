<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pcategory;

use Session;

class PcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pcategory.index')->with('pcategory',  Pcategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pcategory.create');
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
        
        $pcategory = new pcategory;

        $pcategory->name = $request->name;

        $pcategory->save();

        Session::flash('success', 'Pcategory Created Sucessfully.');

        return redirect()->route('pcategory');
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
        $pcategory = Pcategory::find($id);
        
        return view('admin.pcategory.edit')->with('pcategory', $pcategory);
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

        $pcategory = Pcategory::find($id);


       $pcategory->name = $request->name;

       $pcategory->save();;


       Session::flash('success','Pcateory Updated Sucessfully');

       return redirect()->route('pcategory');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pcategory = Pcategory::find($id);

        foreach($pcategory->product as $p){

           $p->forceDelete();
       }

       $pcategory->delete();

       Session::flash('success', 'Pcategory Deleted.');

       return redirect()->route('pcategory');
   }

}
