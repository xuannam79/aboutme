<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Project extends Model
{
	protected $table = "project";
	protected $primaryKey = "id_project";
	public $timestaps = false;

    public function getAll(){
    	return Project::orderBy('id_project','desc')->get();
    }
}
