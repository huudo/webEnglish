@extends('layouts.default')
@section('content')
<link rel="stylesheet" type="text/css" href="{{Asset('public/css/news.css')}}">

<div id="content">
	<div class="row">
		@foreach ($list_tip as $news)
		<div class="col-md-8">
			<div class="news">
				
					<div class="content_news">
						<a href={{URL::to('english_tip/details').'/'.$news['id']}}><h2>{{$news['tittle']}}</h2></a>
						<p>
							<?php
							echo str_limit($news['content'], $limit = 150, $end = '...');
						?>
						</p>
					</div>
				
			</div>			
		</div>

		@endforeach
		<div class="pagination col-md-12">
			<?php
				echo $list_tip->render();
			?>
		</div>
		
	</div>
</div>

@stop