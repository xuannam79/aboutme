@extends('templates.aboutme.master')
@php
	$name = $getDetail->name;
	$count_number = $getDetail->count_number;
	$detail = $getDetail->detail_text;
@endphp
@section('title')
	{{ $name }}
@endsection
@section('content')
<div class="content">
<div id="blog" class="blogdt">
	<div class="news_detail">
		<h1>{{ $name }}</h1>
		<p class="date">Lượt đọc: {{ $count_number }}</p>
		<div class="news_content">
			<p> {{ $detail }} </p>
		</div>
	</div>

	<h4 class="relate">Tin liên quan</h4>
	<ul>
		@foreach($relatedNews as $key => $reNews)
		@php
			$id = $reNews->id_news;
			$name = $reNews->name;
			$preview = $reNews->preview_text;
			$slug = str_slug($name);
			$url = route('aboutme.news.detail', ['slug' => $slug, 'id' => $id])
		@endphp
		<li>
			<div class="article">
				<h3><a href="{{ $url }}" class="more">{{ $name }}</a></h3>
				<p>
					{{ $preview }}
				</p>
			</div>
			<div class="stats">
				<a href="http://vinaenter.edu.vn" class="more" target="_blank"><img src="/templates/aboutme/images/project.jpg" alt="" /></a>
			</div>
		</li>
		@endforeach
	</ul>
</div>
@include('templates.aboutme.sidebar')
</div>
@endsection
