<?php
namespace App\Http\Controllers;

// use App\Services\FirebaseFirestoreService;

class ProjectController extends Controller
{
    private $firestoreService;

    // public function __construct(FirebaseFirestoreService $firestoreService)
    // {
    //     $this->firestoreService = $firestoreService;
    // }

    public function index()
    {
        $projects = $this->firestoreService->getProjects();
        return view('projects.index', ['projects' => $projects]);
    }
}
