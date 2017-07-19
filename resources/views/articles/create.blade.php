@extends ('layouts.master')
@section ('head.title')
	Them bai viet moi
@stop

@section ('body.content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<div>
					<h1>Tạo bài viết mới</h1>
				</div>
			</div>
		</div>
		
		<div class="row">
			
			<form action=" {{route('article.store')}}" method="POST" class="form-horizontal">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="col-sm-6 col-sm-offset-3">
				<div class="form-group">
					<label for="title" class="control-label">Nhập tiêu đề bài viết</label>
					<input class="form-control" type="type" name="title" id="title" required placeholder="Tiêu đề bài viết">
				</div>

				<div class="form-group">
					<label for="content" class="control-label">Nhập nội dung bài viết</label>
					<input class="form-control" type="type" name="content" id="content" required placeholder="Nội dung bài viết">
				</div>

				<div class="form-group">
					<button class="btn btn-primary">Thêm bài viết</button>
				</div>
			</div>
		</div>
			
	</div>
@stop
























