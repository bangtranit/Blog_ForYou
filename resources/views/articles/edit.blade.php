@extends ('layouts.master')
@section ('head.title')
	Them bai viet moi
@stop

@section ('body.content')
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			{!! Form::model($article, [
			'route' => [ 'article.update', $article->id ],
			'method' => 'PUT',
			'class' => 'form-horizontal'
			])
			!!}
			<div class="form-group">
				{!! Form::label('title', 'Tiêu đề bài viết', [ 'class' => 'control-label' ]) !!}
				{!! Form::text('title', null, [ 'id' => 'title', 'class' => 'form-control', 
				'placeholder' => 'Điền tiêu đề vào đây', 'required' => 'true' ]) !!}
			</div>

			<div class="form-group">
				{!! Form::label('content', 'Nội dung bài viêt', [ 'class' => 'control-label']) !!}
				{!! Form::text('content', null, [ 'class' => 'form-control', 'placeholder' => 'Nhập nội dung bài viết', 'reuired' => 'true' ]) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Chỉnh sửa bài viết', [ 'class' => 'btn btn-primary' ]) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
@stop