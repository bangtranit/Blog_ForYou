@extends ('layouts.master')

@section ('body.content')
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-sm-offset-5">
				<h1>Đăng nhập</h1>
			</div>
		</div>
		<br>

 		@include ('errors.author_error')

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
			@include ('forms.login_form')
<!-- 				<form action=" {{ route('author.checkLogin') }}" method="POST" class="form-horizonal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label for="email" class="label-control">Email</label>
					<input class="form-control" type="type" name="email" id="email" required placeholder="Hãy nhập email đăng nhập">
				</div>

				<div class="form-group">
					<label for="password" class="label-control">Mật khẩu</label>
					<input  class="form-control" type="password" name="password" id="password" required placeholder="Hãy nhập mật khẩu">
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Đăng nhập</button>
				</div> -->
			</div>
		</div>




	</div>
@stop