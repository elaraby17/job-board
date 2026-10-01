<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::getJobs();
        return view("Job.index" , ['jobs' => $jobs , 'name' => 'Elaraby']);
    }
}
