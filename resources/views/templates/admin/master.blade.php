@include('templates.admin.header')
@include('templates.admin.leftbar')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                	@yield('content')
                </div>
			</div>
		</div>
	</div>
</div>
@include('templates.admin.footer')