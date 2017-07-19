	{!! Form::open([
	'route' => [ 'article.store' ],
	'method' => 'POST',
	'class' => 'form-horizontal'
	])
	!!}
	<div class="form-group">
		{!! Form::label('title', 'Tiêu đề bài viết', [ 'class' => 'control-label' ]) !!}
		{!! Form::text('title', '', [ 'id' => 'title', 'class' => 'form-control', 
		'placeholder' => 'Điền tiêu đề vào đây', 'required' => 'true' ]) !!}
	</div>

	<div class="form-group">
		{!! Form::label('content', 'Nội dung bài viêt', [ 'class' => 'control-label']) !!}
		{!! Form::text('content', '', [ 'class' => 'form-control', 'placeholder' => 'Nhập nội dung bài viết', 'reuired' => 'true' ]) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Thêm bài viết', [ 'class' => 'btn btn-primary' ]) !!}
	</div>
	{!! Form::close() !!}
