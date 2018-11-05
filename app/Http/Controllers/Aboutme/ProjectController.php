<?php

namespace App\Http\Controllers\Aboutme;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
class ProjectController extends Controller
{
	public function __construct(Project $prj){
		$this->prj = $prj;
	}
    public function index(){
    	$projects = $this->prj->getAll();
    	return view('aboutme.project.index', compact('projects'));
    }
}
