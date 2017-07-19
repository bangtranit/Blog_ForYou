@extends ('layouts.master')

@section ('body.content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-sm-offset-5">
			<h1>Đăng ký</h1>
		</div>
	</div>
	@include ('errors.author_error')

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			@include ('forms.signup_form')
<!-- 				<form action=" {{ route('author.checkSignup') }}" method="POST" class="form-horizonal">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label for="email" class="label-control">Email đăng nhập</label>
					<input type="type" name="email" class="form-control" id="email" required placeholder="Hãy nhập email">
				</div>

				<div class="form-group">
					<label for="name" class="label-control">Tên người dùng </label>
					<input type="type" name="name" class="form-control" id="name" required placeholder="Hãy nhập họ và tên">
				</div>

				<div class="form-group">
					<label for="password" class="label-control">Mật khẩu</label>
					<input type="password" name="password" class="form-control" id="password" required placeholder="Hãy nhập mật khẩu">
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Đăng ký</button>
				</div> -->

			</div>
		</div>



	</div>
	@stop	