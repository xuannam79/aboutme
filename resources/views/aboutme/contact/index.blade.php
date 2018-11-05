@extends('templates.aboutme.master')
@section('title')
	Liên hệ với tôi
@endsection
@section('content')
<div class="content">
	<div id="section">
		<h2>Liên hệ với Gia Huy</h2>
		<img src="/templates/aboutme/images/chung.png" alt="" width="100%" />
		<form action="{{ route('aboutme.contact.index') }}" method ="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<b>Gửi liên hệ trực tuyển</b>
			<span>Vui lòng điền đầy đủ thông tin để liên hệ trực tuyến đến Gia Huy. Tôi sẽ phản hồi sớm nhất có thể!</span>
			<input type="text" name="name" id="name" value="" placeholder="Họ và tên" />
			<input type="text" name="email" id="email" value=""  placeholder="Email" />
			<input type="text" name="address" id="address" value=""  placeholder="Địa chỉ" />
			<input type="text" name="phone" id="phone" value=""  placeholder="Số phone" />
			<textarea name="message" id="message" cols="30" rows="10" placeholder="Nội dung"></textarea>
			<input type="submit" name="send" id="send" value="Gửi liên hệ">
		</form>
		@if(Session::has('msg'))
			<p>{{ Session::get('msg') }}</p>
		@endif

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</div>

	@include('templates.aboutme.sidebar')


	</div>
@endsection
