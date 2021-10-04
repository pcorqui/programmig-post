<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //

    public function showPostBootstrap(){

        $projects = projects::all();

        return view('webboostrap', [
            'projects' => $projects
        ]);
    }
}
