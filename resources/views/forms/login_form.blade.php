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
		{!! Form::password('password', array('placeholder'=>'Password', 'class'=>'form-control', 'placeholder' => 'Hãy nhập mật khẩu', 'required' => 'true') ) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Đăng nhập', [ 'class' => 'btn btn-primary' ]) !!}
	</div>
	{!! Form::close() !!}
