<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use App\Models\Project;
use App\Models\Service;
use App\Models\SeekedJob;
use App\Models\Skill;
use App\Models\Training;

class CvController extends Controller
{

    public function index() {
        $skills = Skill::where('parent_id', null)->with('childs')->get();
        $projects = Project::all();
        $seekedJobs = SeekedJob::all();
        $services = Service::all();
        $trainings = Training::all();
        $interests = Interest::all();
        return view('cv.index', compact('skills', 'projects', 'seekedJobs', 'services', 'trainings', 'interests'));
    }
}
