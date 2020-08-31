<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mrp;

use App\Mrpcategory;

use Session;

class MrpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mrp.index')->with('mrp', Mrp::orderBy('created_at','desc')->paginate(8));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mrpcategory = Mrpcategory::all();

        if($mrpcategory->count() == 0 )
        {
            Session::flash('info', 'You must have some Mrpcategory before attemting to create Product.');

            return redirect()->back();
        }

        return view('admin.mrp.create')->with('mrpcategory', $mrpcategory);
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
            'productname' => 'required',
            'composition' => 'required',
            'mrpcategory_id' => 'required',
            'packsize' => 'required',
            'mrp' => 'required'
        ]);

        $mrp = Mrp::create([
            'productname' => $request->productname,
            'composition' => $request->composition,
            'mrpcategory_id' => $request->mrpcategory_id,
            'packsize' => $request->packsize,
            'mrp' => $request->mrp,


        ]);   

        Session::flash('success', 'Mrp Created Sucessfully.');

        return redirect()->route('mrp');
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
        $mrp = Mrp::find($id);

        return view('admin.mrp.edit')->with('mrp', $mrp)
                                      ->with('mrpcategory', Mrpcategory::all());
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
        $this->validate($request ,[
            'productname' => 'required',
            'composition' => 'required',
            'packsize' => 'required',
            'mrp' => 'required'
        ]);

        $mrp = Mrp::find($id);

        
       $mrp->productname = $request->productname;

       $mrp->composition = $request->composition;


       $mrp->packsize = $request->packsize;

       $mrp->mrp = $request->mrp;

       $mrp->save();;


       Session::flash('success','Mrp Updated Sucessfully');

       return redirect()->route('mrp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mrp = Mrp::find($id);

        $mrp->delete();

        Session::flash('success', 'Mrp Item Sucessfully Deleted.');

        return redirect()->back();
    }
}
