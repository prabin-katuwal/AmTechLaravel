<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Pcategory;

use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index')->with('product', Product::orderBy('created_at','desc')->paginate(8));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $pcategory = Pcategory::all();

        if($pcategory->count() == 0 )
        {
            Session::flash('info', 'You must have some Pcategory before attemting to create Product.');

            return redirect()->back();
        }

        return view('admin.product.create')->with('pcategory', $pcategory);
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
            'pcategory_id' => 'required',
            'packsize' => 'required',
            'dosage' => 'required'
        ]);

        $product = Product::create([
            'productname' => $request->productname,
            'composition' => $request->composition,
            'pcategory_id' => $request->pcategory_id,
            'packsize' => $request->packsize,
            'dosage' => $request->dosage,


        ]);   

        Session::flash('success', 'Product Created Sucessfully.');

        return redirect()->route('product');
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
        $product = Product::find($id);

        return view('admin.product.edit')->with('product', $product)
                                      ->with('pcategory', Pcategory::all());
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
            'dosage' => 'required'
        ]);

        $product = Product::find($id);

        
       $product->productname = $request->productname;

       $product->composition = $request->composition;


       $product->packsize = $request->packsize;

       $product->dosage = $request->dosage;

       $product->save();;


       Session::flash('success','Product Updated Sucessfully');

       return redirect()->route('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        Session::flash('success', 'Product Item Sucessfully Deleted.');

        return redirect()->back();
    }
}
