@extends('layouts.default')
@section('content')
<link rel="stylesheet" type="text/css" href="{{Asset('public/css/news.css')}}">

<div id="content">
	<h2>
		<?php
			echo $new['tittle'];
		?>
	</h2>
	<div class="img_details"> 
		<img src={{Asset('public/images/uploads').'/'.$new['img']}}>
	</div>
	<div class="news_details">
		<?php
			echo $new['content'];
		?>
	</div>
	<div class="fb-comments" data-href="http://espenglish.vn/chuyen_nganh/{{$new['id']}}" data-width="800" data-numposts="5"></div>

</div>


@stop