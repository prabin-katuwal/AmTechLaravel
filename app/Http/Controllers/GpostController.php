<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gpost;

use Session;

class GpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('admin.gallery.index')->with('gposts', Gpost::orderBy('created_at','desc')->paginate(8));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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

        $featured->move('uploads/gallery', $featured_new_name);

        $gpost = Gpost::create([
            'title' => $request->title,
            'featured' => 'uploads/gallery/' . $featured_new_name

        ]);   

        Session::flash('success', 'Gallery Created Sucessfully.');

        return redirect()->route('gallery');
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
         $gpost = Gpost::find($id);

        return view('admin.gallery.edit')->with('gpost', $gpost);
                                     
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

        $gpost = Gpost::find($id);

        if($request->hasFile('featured'))
       
        {

       $featured = $request->featured;

       $featured_new_name = time().$featured->getClientOriginalName();

       $featured->move('uploads/gallery/', $featured_new_name);

       $gpost->featured = 'uploads/gallery/'.$featured_new_name;


        }

       $gpost->title = $request->title;


       $gpost->save();

       Session::flash('success','Gallery Updated Sucessfully');

       return redirect()->route('gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $gpost = Gpost::find($id);

        $gpost->delete();

        Session::flash('success', 'Gallery Item Sucessfully Deleted.');

        return redirect()->back();
    }
}
