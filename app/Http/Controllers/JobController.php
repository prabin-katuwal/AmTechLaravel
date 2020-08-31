<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Job;

use Session;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.job.index')->with('job', Job::orderBy('created_at','desc')->paginate(8));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job.create');
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
            'position' => 'required',
            'reqno' => 'required',
            'qualification' => 'required',
            'location' => 'required'
        ]);

        $job = Job::create([
            'position' => $request->position,
            'reqno' => $request->reqno,
            'qualification' => $request->qualification,
            'location' => $request->location,

        ]);   

        Session::flash('success', 'Job Created Sucessfully.');

        return redirect()->route('job');
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
        $job = Job::find($id);

        return view('admin.job.edit')->with('job', $job);
             
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
            'position' => 'required',
            'reqno' => 'required',
            'qualification' => 'required',
            'location' => 'required'    
        ]);

        $job = Job::find($id);

       $job->position = $request->position;
       $job->reqno = $request->reqno;
       $job->qualification = $request->qualification;
       $job->location = $request->location;


       $job->save();

       Session::flash('success','Job Updated Sucessfully');

       return redirect()->route('job');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);

        $job->delete();

        Session::flash('success', 'Job Item Sucessfully Deleted.');

        return redirect()->back();
    }
}
