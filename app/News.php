<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = "news";
	protected $primaryKey = "id_news";
	public $timestaps = false;

	public function getAll(){
    	return $this->all();    }

    public function getIDNews($id){
    	return $this->findOrFail($id);
    }

    public function getDetail($id) {
    	return $this->findOrFail($id);
    }

    public function relatedNews($id) {
    	$getidCat = DB::raw("(SELECT id_cat FROM news WHERE id_news = $id)");
    	return $this->where('id_cat', $getidCat)->where('id_news','<>', $id)->limit(3)->get();
    }

}
