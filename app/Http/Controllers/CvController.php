<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use App\Models\PersonalProject;
use App\Models\Project;
use App\Models\Service;
use App\Models\SeekedJob;
use App\Models\Skill;
use App\Models\Training;
use App\Models\WhereSeekedJob;

class CvController extends Controller
{

    public function index() {
        $skills = Skill::where('parent_id', null)->with('childs')->get();
        $projects = Project::all();
        $personalProjects = PersonalProject::all();
        $seekedJobs = SeekedJob::getFormattedForHtml();
        $whereSeekedJobs = WhereSeekedJob::getFormattedForHtml();
        $services = Service::all();
        $trainings = Training::all();
        $interests = Interest::all();
        return view('cv.index', compact('skills', 'projects', 'personalProjects', 'seekedJobs', 'whereSeekedJobs', 'services', 'trainings', 'interests'));
    }
}
