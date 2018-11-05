<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8" />
	<title>@yield('title','Trang chủ')</title>
	<link rel="stylesheet" href="/templates/aboutme/css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
			<div>
				<span>Trần Nguyễn Gia Huy</span>
				<a href="index.html" class="logo"><img src="/templates/aboutme/images/logo.png" alt=""></a>
				<span class="tagline">Mỗi ngày là một món quà</span>
			</div>
			<ul>
				<li>
					<a href="{{ route('aboutme.index.index') }}">Trang chủ</a>
				</li>
				<li>
					<a href="{{ route('aboutme.about.index') }}">Giới thiệu</a>
				</li>
				<li>
					<a href="{{ route('aboutme.project.index') }}">Dự án thực hiện</a>
				</li>
				<li>
					<a href="{{ route('aboutme.news.index') }}">Tin tức</a>
				</li>
				<li>
					<a href="{{ route('aboutme.contact.index') }}">Liên hệ</a>
				</li>
			</ul>
		</div>
	</div>