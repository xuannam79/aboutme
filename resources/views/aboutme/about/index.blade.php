@extends('templates.aboutme.master')
@section('title')
	VỀ TÔI
@endsection
@section('content')
<div class="content">
	<div id="section">
		<h2>Chào mừng bạn đến với website cá nhân Trần Nguyễn Gia Huy</h2>
		<p>
			Trần Nguyễn Gia Huy sinh ngày 19/05/2000, được sinh ra trong một gia đình giàu truyền thống ngành CNTT. Cha tôi là một kỹ sư CNTT đầu ngành trong công ty, và có nhiều đóng góp tạo nên thương hiệu công ty...
		</p>
		<img src="/templates/aboutme/images/old-couple.jpg" alt="">
		<div class="article">
			<div>
				<h3>Vài nét về Gia Huy</h3>
				<p>
				- Họ tên: Trần Nguyễn Gia Huy<br />
				- Địa chỉ: 154 Phạm Như Xương, Liên Chiểu, Đà Nẵng<br />
				- Email: giahuy@vinaenter.com - Phone: 0905.051.720
				</p>

				<h3>Khả năng của tôi</h3>
				<p>
				- Phát triển web Front-End<br />
				- Phát triển Web Back-End<br />
				- Kỹ năng làm việc nhóm và thuyết trình tốt
				</p>
			</div>

			<div>
				<h3>Kỹ năng chuyên ngành</h3>
				<p>
				- Html, Css, Javascript, Jquery<br />
				- PHP, MySQL, Ajax<br />
				- Javacore, Jsp-servlet, Swing, .NET
				</p>

				<h3>Mục tiêu của tôi</h3>
				<p>
				- Làm việc trong môi trường chuyên nghiệp<br />
				- Nâng cao kỹ năng chuyên môn với nhiều dự án khó<br />
				- Góp phần phát triển phòng công nghệ của công ty
				</p>
			</div>
		</div>
	</div>

	@include('templates.aboutme.sidebar')


	</div>
@endsection
