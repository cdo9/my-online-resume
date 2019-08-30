<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;

class CvController extends Controller
{

    public function index() {
        $skills = Skill::where('parent_id', null)->with('childs')->get();
        $projects = Project::all();
        return view('index', compact('skills', 'projects'));
    }
}
