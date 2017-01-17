@extends('layouts.default')
@section('content')
<link rel="stylesheet" type="text/css" href="{{Asset('public/css/news.css')}}">

<div id="content">
	<div class="news_details">
		<?php
			echo $details['content'];
		?>
	</div>
	<div class="fb-comments" data-href="http://espenglish.vn/english_tip/{{$details['id']}}" data-width="800" data-numposts="5"></div>

</div>


@stop