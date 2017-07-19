{!! Form::open([
	'route' => [ 'author.checkLogin' ],
	'method'=> 'POST',
	'class' => 'form-horizontal'
	])!!}

	<div class="form-group">
		{!! Form::label('email', 'Email đăng nhập', [ 'class' => 'control-label' ]) !!}
		{!! Form::text('email', '', [ 'id' => 'email', 'class' => 'form-control', 
		'placeholder' => 'Hãy nhập email', 'required' => 'true' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('password', 'Mật khẩu', [ 'class' => 'control-label']) !!}
		{!! Form::text('password', '', [ 'type' => 'password', 'class' => 'form-control', 'placeholder' => 'Hãy nhập mật khẩu', 'reuired' => 'true' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Đăng nhập', [ 'class' => 'btn btn-primary' ]) !!}
	</div>
	{!! Form::close() !!}
