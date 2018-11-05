<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="category";
    protected $primaryKey = "id_cat";
    public $timestamp = false;

    public function getAllCat(){
    	return $this->all();
    }

    public function getIDCat(){
    	return $this->select('id_cat')->get();
    }
}
