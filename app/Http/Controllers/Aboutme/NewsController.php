<?php

namespace App\Http\Controllers\Aboutme;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
use App\Category;

class NewsController extends Controller
{
	public function __construct(News $new, Category $cate){
		$this->new = $new;
        $this->cate = $cate;
	}

    public function index(){
        $getAllCat = $this->cate->getAllCat();
        $getIDCat = $this->cate->getIDCat();
        $getAllNews = $this->new->getAll();
    	return view('aboutme.news.index',compact('getAllCat','getIDCat','getAllNews'));
    }

    public function detail($slug, $id){
        $getDetail = $this->new->getDetail($id);
        $relatedNews = $this->new->relatedNews($id);
    	return view('aboutme.news.detail',compact('getDetail','relatedNews'));
    }
}
