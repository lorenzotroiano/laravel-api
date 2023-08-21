<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{

    public function projectIndex()
    {

        $projects = Project::with('technologies')->paginate(10);

        return response()->json([
            'projects' => $projects
        ]);
    }
}
