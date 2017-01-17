@extends('layouts.default')
@section('content')
<link rel="stylesheet" type="text/css" href="{{Asset('public/css/reponsive.css')}}">
<div id="content">
	<div id="slide">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
		  </ol>
		 
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="{{Asset('public/images/1.jpg')}}" alt="...">
		      <div class="carousel-caption">
		         
		      </div>
		    </div>
		    <div class="item">
		      <img src="{{Asset('public/images/2.jpg')}}" alt="...">
		      <div class="carousel-caption">
		          
		      </div>
		    </div>
		    <div class="item">
		      <img src="{{Asset('public/images/3.jpg')}}" alt="...">
		      <div class="carousel-caption">
		         
		      </div>
		    </div>
		     <div class="item">
		      <img src="{{Asset('public/images/4.jpg')}}" alt="...">
		      <div class="carousel-caption">
		         
		      </div>
		    </div>
		  </div>
		 
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div> <!-- Carousel -->
	</div>	
	<div id="khoa_hoc" align="center">
		<div id="order">
			<a href="">
				<img src="{{Asset('public/images/order.png')}}">
			</a>
			
		</div>
		<div id="khoa_hoc_text">
			<h2> {{$menu[5]}}</h2>
			
		</div>
	</div>
	<div id="subject" align="center">
		<div class="container-fluid subject_container">
			<div class="row">

				<div class="col-md-12 span12" align="center" id="file1">
					<img src="{{Asset('public/images/file1.png')}}" >
					<span class="caption">
						<h3>{{$menu[6]}}</h3>
					</span>
				</div>
				<div class="col-md-12 span12" align="center" id="file2">
					<img src="{{Asset('public/images/file2.png')}}" >
					<span class="caption">
						<h3>{{$menu[7]}}</h3>
					</span>
				</div>
				<div class="col-md-12 span12" align="center" id="file3">
					<img src="{{Asset('public/images/file3.png')}}">
					<span class="caption">
						<h3>{{$menu[8]}}</h3>
					</span>
				</div>

				<div class="col-md-12 span12" align="center" id="file4">
					<img src="{{Asset('public/images/file4.png')}}" >
					<span class="caption">
						<h3>{{$menu[9]}}</h3>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div id="customer">
		<div id="customer_text" align="center">
			<h2>
				{{$menu[13]}}
			</h2>
		</div>
		<div class="container">
			<div class="row" align="center">
				<!-- <div class="col-md-3">
					<img src="{{Asset('public/images/customer1.png')}}" id="customer1">
					<p class="profile">Name: Huu Do</p>
					<p class="profile">Chức vụ: Nhân viên IT</p>
				</div>
				<div class="col-md-3">
					<p class="customer_say"> 
						"Trước khi tham gia khóa học tôi rất sợ phải nói Tiếng Anh. Và rất ngại phải nói chuyện với người nước ngoài. Giờ tôi đã 
						tự tin khi nói Tiếng Anh
				</div> với nhiều người. Nhờ ESP English công việc và cuộc sống của tôi trở nên thật tốt đẹp. I love ESP English! "
					</p>

				<div class="col-md-3">
					<img src="{{Asset('public/images/customer1.png')}}" id="customer1">
					<p class="profile">Name: Huu Do</p>
					<p class="profile">Chức vụ: Nhân viên IT</p>
				</div>
				<div class="col-md-3">
					<p class="customer_say"> 
						"Trước khi tham gia khóa học tôi rất sợ phải nói Tiếng Anh. Và rất ngại phải nói chuyện với người nước ngoài. Giờ tôi đã 
						tự tin khi nói Tiếng Anh với nhiều người. Nhờ ESP English công việc và cuộc sống của tôi trở nên thật tốt đẹp. I love ESP English! "
					</p>
				</div> -->

				<div class="col-md-3 student">
					<div class="student_image" align="center">
						<img src="{{Asset('public/images/student1.png')}}" class="img_student">
					</div>
					<div class="student_comment">
						<p class="about_student">
							{{$comment[0]->name}} </br>
							{{$comment[0]->job}}
						</p>
						<p class="student_say">
							"{{$comment[0]->comment}}"
					    
						</p>
					</div>
				</div>
				<div class="col-md-3 student">
					<div class="student_image" align="center">
						<img src="{{Asset('public/images/student2.png')}}" class="img_student">
					</div>
					<div class="student_comment">
						<p class="about_student">
							{{$comment[1]->name}} </br>
							{{$comment[1]->job}}
						</p>
						<p class="student_say">
							"{{$comment[1]->comment}}"					    
						</p>
					</div>
				</div>
				<div class="col-md-3 student">
					<div class="student_image" align="center">
						<img src="{{Asset('public/images/student3.png')}}" class="img_student">
					</div>
					<div class="student_comment">
						<p class="about_student">
							{{$comment[2]->name}} </br>
							{{$comment[2]->job}}
						</p>
						<p class="student_say">
							"{{$comment[2]->comment}}"					    
						</p>
					</div>
				</div>
				<div class="col-md-3 student">
					<div class="student_image" align="center">
						<img src="{{Asset('public/images/student4.png')}}" class="img_student">
					</div>
					<div class="student_comment">
						<p class="about_student">
							{{$comment[3]->name}} </br>
							{{$comment[3]->job}}
						</p>
						<p class="student_say">
							"{{$comment[3]->comment}}"					    
						</p>
					</div>
				</div>
		
			</div>
		</div>
	</div>
</div>	
<!-- 
<textarea id="editor1" class="ckeditor"></textarea>  
  
  <script type="text/javascript">  
     CKEDITOR.replace( 'editor1' );  
  </script>  
-->
@stop