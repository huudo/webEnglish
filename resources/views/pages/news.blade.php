@extends('layouts.default')
@section('content')
<link rel="stylesheet" type="text/css" href="{{Asset('public/css/news.css')}}">

<div id="content">
	<div class="row">
		@foreach ($new as $news)
			<div class="col-md-8">
			<div class="news">
				<div class="row">
					<div class="col-md-4 img_news">
						<img src={{Asset('public/images/uploads').'/'.$news['img']}}>
					</div>
					<div class="col-md-8 content_news">
						<a href={{URL::to('news/').'/'.$news['id']}}><h2>{{$news['tittle']}}</h2></a>
					</div>
				</div>	
			</div>			
		</div>

		@endforeach
		
		<div class="col-md-4">
			<div id="register">				
			</div>
		</div>		
	</div>
</dsiv>

@stop