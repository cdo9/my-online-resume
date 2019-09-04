<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Services;
use App\Models\SeekedJobs;
use App\Models\Skill;

class CvController extends Controller
{

    public function index() {
        $skills = Skill::where('parent_id', null)->with('childs')->get();
        $projects = Project::all();
        $seekedJobs = SeekedJobs::all();
        $services = Services::all();
        return view('cv.index', compact('skills', 'projects', 'seekedJobs', 'services'));
    }
}
