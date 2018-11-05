@extends('templates.aboutme.master')
@section('title')
	My Project
@endsection
@section('content')
<div class="content">
	<div id="blog">
		<h2>Các dự án đã thực hiện</h2>
		<ul>
			@foreach($projects as $key => $proj)
				@php
					$name = $proj->name;
					$preview = $proj->preview_text;
				@endphp
			<li>
				<div class="article">
					<h3>{!! $name !!}</h3>
					<p>
						{!! $preview !!}
					</p>
					<a href="http://vinaenter.edu.vn" class="more" target="_blank">Truy cập trang này</a>
				</div>
				<div class="stats">
					<a href="http://vinaenter.edu.vn" class="more" target="_blank"><img src="/templates/aboutme/images/project.jpg" alt="" /></a>
				</div>
			</li>
			@endforeach
		</ul>
		<ul class="paging">
			<li class="first">
				<a href="#">Trước</a>
			</li>
			<li class="selected">
				<a href="#">1</a>
			</li>
			<li>
				<a href="#">2</a>
			</li>
			<li>
				<a href="#">3</a>
			</li>
			<li class="last">
				<a href="#">Sau</a>
			</li>
		</ul>
	</div>

	@include('templates.aboutme.sidebar')


	</div>
@endsection
