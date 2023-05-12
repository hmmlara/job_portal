<?php

namespace App\Http\Controllers;

use App\Models\JobType;
use Illuminate\Http\Request;

class JobTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    // $this->middleware('auth');
    // }

    public function index()
    {
        $jobtype = JobType::latest()->paginate(5);
        return view('admin.jobtype.index', ['jobtypes'=>$jobtype]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $jobtypes=JobType::all();
        return view('admin.jobtype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'job_type'=>'required',
        ]);

        $jobtype=JobType::create($request->all());
        return redirect()->route('job-type.index');

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
        $jobtype=JobType::find($id);
        return view('admin.jobtype.edit',['jobtype'=>$jobtype]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobType $jobType)
    {
        $request->validate([
            'job_type'=>'required',
        ]);
        $jobType->update($request->all());
        return redirect()->route('job-type.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobtype = JobType::find($id);
        $jobtype->delete();
        return redirect()->route('job-type.index');
    }
}
