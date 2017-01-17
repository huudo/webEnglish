@extends('layouts.default')
@section('content')
<div id="content">
	<div class="row">
		<div class="col-md-12 contact">
			<h1>ESP ENGLISH VIET NAM</h1>
			<p><i class="fa fa-map-marker"></i> {{$contact[0]}} : {{$contact[2]}}</p>
			<p><i class="fa fa-mobile"></i> {{$contact[1]}} : 0988 331 890</p>
			<h2></h2>
			<div id="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3723.45128288085!2d105.78270787842969!3d21.054630606652477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zxJDGsOG7nW5nIFRy4bqnbiBDdW5nICwgSMOgIE7hu5lp!5e0!3m2!1sen!2s!4v1459822932828" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
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
	</div>
</div>	
@stop