@extends ('layouts.master')

@section ('head.title')
Blog
@stop

@section ('body.content')
	<!-- <script>
		function myFunction() {
	    	document.getElementById("demo").display = "no";
		}
	</script> -->
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
			</div>
		</div>

		<form class="form-show">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2> {{ $article->title}} </h2>
					<p>  {{ $article->content}} </p>
					<p id="demo">A Paragraph.</p>
				</div>

				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<a href=" {{ route('article.edit', $article->id) }}" class="btn btn-info">Cập nhật</a>
						<button id="submit" type="button" class="btn btn-primary" onclick="myFunction()">Delete</button>

						<!-- <button id="delete-button" type="submit" class="btn btn-primary">Xoa</button> -->
						<!-- <button id="detete-ariticle" type="button" class="btn btn-danger">Xoá</button id="detete-ariticle"> -->
						<!-- {!! Form::open([
								'route'  => [ 'article.delete', $article->id ],
								'method' => 'DELETE',
								'class'  => 'form-inline',
								'style'  => 'display: inline'
							])
						!!}			
							<button class="btn btn-danger">Xoá</button>
						{!! Form::close() !!} -->
					</div>
				</div>
			</div>
		</form>
	</div>
	<script src="{{ asset('js/myScript.js') }}"></script>
	<script src="{{ asset('/js/jshow.js') }}"></script>
@stop