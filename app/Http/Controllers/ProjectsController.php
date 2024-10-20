<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    function index(){
        return view('projects.index');
    }

    function show(Project $project){
        return view('projects.show', compact('project'));
    }
}
