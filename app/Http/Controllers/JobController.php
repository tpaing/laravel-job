<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Auth;
use App\Http\Requests\userStoreRequest;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $jobs = Job::where('user_id', '=', Auth::user()->id)->get();
        //$jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(userStoreRequest $request)
    {
        $validated = $request->validated();  

        $data = $request->all();

        $data['user_id'] = Auth::user()->id;

        Job::create($data);

        return redirect()->route('jobs.index')->with('success', 'Job created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        if($job->user_id !== Auth::id()){
            return back()->with('error', 'Unauthorize to edit.');
                   
        }

        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(userStoreRequest $request, Job $job)
    {
        $validated = $request->validated();
        
        $job->update($request->all());
        return redirect()->route('jobs.index')->with('success', 'Job Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        if($job->user_id !== Auth::id()) {
            return back()->with('errors', 'Only Autorized user can do this');
        }
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job Deleted');
    }
}
