@extends('templates.aboutme.master')
@section('title')
	TIN TỨC
@endsection
@section('content')
<div class="section">
<h2>Trang tin Gia Huy</h2>
<p class="ptop">
	Cập nhật các tin tức mới nhất về hoạt động xã hội của Gia Huy hoặc những tin tức ngoài lề mà Gia Huy quan tâm:
</p>
@foreach($getAllCat as $key => $cats)
	@php
		$name = $cats->name;
	@endphp
<!-- begin block -->
<div class="project-wrap">
	<h3 class="title">{{ $name }}</h3>
	<div class="project-top">
		<a href="#"><img src="/templates/aboutme/images/webhoa.jpg" alt=""></a>
		<div>
			<b><a href="#">Gia Huy dự thi "Tài năng lập trình trẻ 2016"</a></b>
			<small>Ngày đăng: 12/1/2016</small>
			<p class="preview_text">
				Website thực hiện bởi công nghệ JAVA JSP-SERVLET. Trang web giúp người bán hàng có thể quản lý các loài hoa một cách dễ dàng. Qua website có thể tiếp cận khách hàng và cho phép họ đặt hàng trực tuyến trên web.
			</p>
		</div>
	</div>
	<ul class="article">
		@foreach($getAllNews as $key => $news)
		@php
			$idCat = $cats->id_cat;
			$idCatNews = $news->id_cat;
		@endphp
		@if($idCat == $idCatNews)
			@php
				$name = $news->name;
				$preview_text = $news->preview_text;
				$id = $news->id_news;
				$slug = str_slug($name);
				$url = route('aboutme.news.detail', ['slug' => $slug, 'id' => $id])
			@endphp
		<li>
			<a href="#"><img src="/templates/aboutme/images/webhoa.jpg" alt=""></a> <b><a href="{{ $url }}">{{ $name }}</a></b> <small>Ngày Đăng: 12/1/2016</small>
			<p>
				{{ $preview_text }}
			</p>
		</li>
		@endif
		@endforeach
	</ul>
	<div class="clr"></div>
</div> <!-- end block -->
@endforeach
</div>
@endsection
