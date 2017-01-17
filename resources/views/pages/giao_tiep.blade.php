@extends('layouts.default')
@section('content')
<link rel="stylesheet" type="text/css" href="{{Asset('public/css/chuyen_nganh.css')}}">
<div id="content">
	<div class="row">
		<div class="col-md-12">
			<h2>{{$giao_tiep[0]}}</h2>
			<p>{{$giao_tiep[1]}}</p>
			<img src="{{Asset('public/images/giao_tiep.jpg')}}" class="img_chuyennganh">
			<p> - {{$giao_tiep[2]}}</p>
			<p> - {{$giao_tiep[3]}}</p>
			<p> - {{$giao_tiep[4]}}</p>			
		</div>
		<div class="group_chuyen_nganh" align="center">
			<div class="col-md-4 details_cnganh">
				<div class="show_cnganh">
					<h2>Beginner</h2>
				</div>
				
			</div>	
			<div class="col-md-4 details_cnganh">
				<div class="show_cnganh">
					<h2>Pre – intermediate</h2>
				</div>
			</div>	
			<div class="col-md-4 details_cnganh">
				<div class="show_cnganh">
					<h2>Intermediate</h2>
				</div>
			</div>	
		</div>
	</div>
	<div class="row" align="center">
		<div class="dang_ky col-md-6" align="center">
			<h2><i class="fa fa-graduation-cap"></i> {{$contact[7]}}</h2>
			<form action="" class="submit_form">
				<input type="text" id="name" class="name" name="name" placeholder="{{$contact[3]}}" required>
				<input type="date" id="year" class="year" name="year" placeholder="{{$contact[6]}}" required>
				<input type="text" id="phone" class="phone" name="phone" placeholder="{{$contact[1]}}" required>
				<input type="text" id="email" class="email" name="email" placeholder="{{$contact[4]}}" required>
				<input type="text" id="job" class="job" name="job" placeholder="{{$contact[5]}}">
				<select>
					<option value="{{$menu[6]}}">{{$menu[6]}}</option>
					<option value="{{$menu[7]}}">{{$menu[7]}}</option>
					<option value="{{$menu[8]}}">{{$menu[8]}}</option>
					<option value="{{$menu[9]}}">{{$menu[9]}}</option>
				</select>
				<input type="button" id="btn_submit" class="btn_submit" name="btn_submit" value="{{$contact[8]}}">				
			</form>
		</div>
		<img src="{{Asset('public/images/bottom.jpg')}}">
	</div>
	<div>
		<div class="fb-comments" data-href="http://espenglish.vn/giao_tiep" data-width="800" data-numposts="5"></div>
	</div>
</div>

@stop
