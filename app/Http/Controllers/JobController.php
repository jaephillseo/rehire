<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;

class JobController extends Controller
{
    public function index(){
    	//return "home page";
    	$jobs = Jobs::all();
    	return view('welcome', compact('jobs'));
    }

    public function show($id, Jobs $job){
    	// dd($job);
    	return view('jobs.show', compact('job'));
    }
}
