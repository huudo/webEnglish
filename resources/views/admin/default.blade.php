<html>
<head>
	<title></title>
	<meta name="csrf-token" content="{!! csrf_token() !!}">
	<link rel="stylesheet" type="text/css" href={{Asset('public/css/bootstrap.min.css')}}>

	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{Asset('public/css/admin/style.css')}}">
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
	<script type="text/javascript" src={{Asset('public/template/ckeditor/ckeditor.js')}} ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>
<body>
<div id="wrapper">
	
	<div class="nav-side-menu">
	    <div class="brand">ESP ENGLISH</div>
	    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
	        <div class="menu-list">	  
	            <ul id="menu-content" class="menu-content collapse out">
	                <li>
	                  <a href={{URL::to('auth/logout')}}>

	                  <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
	                  </a>
	                </li>

	                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
	                  <a href="#"><i class="fa fa-gift fa-lg"></i> MENU <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="products">
	                    <li><a href={{URL::to('/admin/news')}}>Tin tức</a></li>
	                    <li><a href={{URL::to('admin/students')}}>Danh sách sinh viên</a></li>	           
	                </ul>	
	                <li data-toggle="collapse" data-target="#Tiếng Anh chuyên ngành" class="collapsed">
	                  <a href="#"><i class="fa fa-car fa-lg"></i> TIẾNG ANH CHUYÊN NGÀNH <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="new">
	                 	@foreach ($list_chuyenNganh as $list_chuyenNganhs)
					    	<li><a href={{URL::to('admin/chuyen_nganh').'/'.$list_chuyenNganhs['id']}}>{{$list_chuyenNganhs['name']}}</a></li>
					    @endforeach
	                </ul>
	                <li data-toggle="collapse" data-target="#Tiếng Anh giao tiếp" class="collapsed">
	                  <a href="#"><i class="fa fa-car fa-lg"></i> TIẾNG ANH GIAO TIẾP <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="new">
	                 	@foreach ($giao_tiep as $giao_tieps)
					    	<li><a href={{URL::to('admin/giao_tiep').'/'.$giao_tieps['id']}}>{{$giao_tieps['name']}}</a></li>
					    @endforeach
	                </ul>	  
	                <li data-toggle="collapse" data-target="#English Tip" class="collapsed">
	                  <a href="#"><i class="fa fa-car fa-lg"></i> ENGLISH TIPS <span class="arrow"></span></a>
	                </li>
	                <ul class="sub-menu collapse" id="new">
	                 	@foreach ($tip as $tips)
					    	<li><a href={{URL::to('admin/english_tip').'/'.$tips['id']}}>{{$tips['name']}}</a></li>
					    @endforeach
	                </ul>	              	                             
	            </ul>
	     </div>
	</div>
	<div class="content">
		 @yield('content')
	</div>
</div>
</body>
</html>