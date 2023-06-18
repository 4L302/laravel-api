<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('type')->paginate(5);
        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show($slug)
    {
        $project = Project::with('type', 'technologies')->where('slug', $slug)->first();
        if ($project) {
            return response()->json([
                "succes" => true,
                "result" => $project
            ]);
        } else {
            return response()->json([
                "succes" => false,
                "result" => 'Nessun progetto trovato'
            ]);
        }
    }
}
