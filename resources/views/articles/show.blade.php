@extends ('layouts.master')

@section ('head.title')
Blog
@stop

@section ('body.content')
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2> {{ $article->title}} </h2>
				<p>  {{ $article->content}} </p>
			</div>
		</div>
	</div>
@stop