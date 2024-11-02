<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getCsrfToken(Request $request)
    {
        // Get the CSRF token
        $csrfToken = csrf_token();

        // Return it as a JSON response (or however you need it)
        return response()->json(['csrf_token' => $csrfToken]);
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'company' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'about_company' => 'required|string',
            'project_type' => 'required|string|max:255',
            'budget' => 'required|string|max:255',
            'timeline' => 'required|string|max:255',
            'about_project' => 'required|string',
        ]);

        // Create a new project
        Project::create($request->all());

        // Return a response (you can modify this as needed)
        return response()->json(['message' => 'Project created successfully'], 201);
    }
}