@extends ('layouts.master')
@section ('head.title')
Danh sach cac bai viet
@stop

@section ('body.content')
	
	<div class="container">
	@foreach($articles as $a)
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<h2> {{ $a->title }} </h2>
				<p>  {{ $a->content }} </p>
				<a href=" {{ route('article.show',$a->id) }} ">Xem them</a>
			</div>
		</div>
	@endforeach

		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				{!! $articles->render() !!}
			</div>
		</div>

	</div>
@stop