
	<header>
		<div id="banner">
			<div class="container-fluid">
				<div class="row">
					<a href="{{URL::to('/')}}">
					<div class="col-md-4" id="logo">

					</div>
					</a>
					<div class="hidden-xs col-md-5">
						<h2 class="top_title">100% NATIVE ENGLISH TEACHERS</h2>
					</div>
					<div class="hidden-xs col-md-3" align="right">
						<div id="hot_line">
							<p><i class="fa fa-phone"></i>0988331890</p>
						</div>
						<div id="icon_link">
							<a target="_blank"  href="https://www.facebook.com/ESP-English-1698612423715540/?ref=br_rs"><i class="fa fa-facebook-official"></i></a>
							<a target="_blank" href=""><i class="fa fa-twitter-square"></i></a>
							<a target="_blank" href=""><i class="fa fa-google-plus-square"></i></a>
							<a target="_blank" href=""><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="wrapper">
		<div id="menu">
			<div id="sub_menu">
				<nav class="navbar navbar-default" align="left">
  				<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			    	<div class="row">
			    		<div class="col-md-3 hidden-sm hidden-md hidden-lg">
			    			<p id="slogan_small"> BEYOND YOUR LIMITS!</p>
			    		</div>
			    		<div class='col-md-9'>
			    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							    <span class="sr-only">Toggle navigation</span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
							    <span class="icon-bar"></span>
							</button>
			    		</div>
			    	</div>		
					
		    	</div>
<style type="text/css">
	.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
</style>

		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-left ">
					<li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i>{{$menu[0]}} <span class="sr-only">(current)</span></a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					  		<i class="fa fa-graduation-cap"></i> {{$menu[1]}}<span class="caret"></span></a>
					  <ul class="dropdown-menu">
					    <li><a href="{{URL::to('/introduce')}}">{{$menu[2]}}</a></li>
					    <li role="separator" class="divider"></li>
					    <li><a href="#">{{$menu[3]}}</a></li>	            
					  </ul>
					</li>
					<li><a href="{{URL::to('news')}}"><i class="fa fa-bullhorn"></i> {{$menu[4]}}</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					  		<i class="fa fa-tasks"></i>{{$menu[5]}}<span class="caret"></span></a>
					  <ul class="dropdown-menu">
					    <li class="dropdown-submenu">
					    	<a href="{{URL::to('/chuyen_nganh')}}">{{$menu[6]}}</a>
					    	<ul  class="dropdown-menu">
					    		@foreach ($list_chuyenNganh as $list_chuyenNganhs)
					    			<li><a href={{URL::to('chuyen_nganh/').'/'.$list_chuyenNganhs['id']}}>{{$list_chuyenNganhs['name']}}</a></li>
					    		@endforeach
					    	</ul>
					    </li>
					    <li role="separator" class="divider"></li>
					    <li class="dropdown-submenu">
					    	<a href="{{URL::to('/giao_tiep')}}">{{$menu[7]}}</a>
					    	<ul  class="dropdown-menu">
					    		@foreach ($comunicate as $comunicates)
					    			<li><a href={{URL::to('giao_tiep/').'/'.$comunicates['id']}}>{{$comunicates['name']}}</a></li>
					    		@endforeach
					    	</ul>
					    </li>	
					    <li role="separator" class="divider"></li>            
					    <li><a href="#">{{$menu[8]}}</a></li>
					    <li role="separator" class="divider"></li>
					    <li><a href="#">{{$menu[9]}}</a></li>	  		             
					  </ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-users"></i>{{$menu[10]}}<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							 @foreach ($tip as $tips)
									<li><a href={{URL::to('english_tip/').'/'.$tips['id']}}>{{$tips['name']}}</a></li>
									<li role="separator" class="divider"></li>
							@endforeach
						    
						</ul>
					</li>
					<li role="separator" class="divider"></li>
					<li><a href="{{URL::to('/contact')}}"><i class="fa fa-map-marker"></i>{{$menu[11]}}</a></li>
					</ul>
			     
			    </div><!-- /.navbar-collapse -->
		 	 </div><!-- /.container-fluid -->
			</nav>
			</div>
				
		</div>
		<div id="language" align="right">
				<div id="vietnam">
				<a href="{{ URL::to('/vn') }}">
					<img src="{{Asset('public/images/vietnam.png')}}">
				</a>
				</div>
				<div id="english">
				<a href="{{ URL::to('/eng') }}">
					<img src="{{Asset('public/images/english.png')}}">
				</a>
					
				</div>
			</div>
			
	</div>
	

