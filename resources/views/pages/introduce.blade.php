@extends('layouts.default')
@section('content')
<link rel="stylesheet" type="text/css" href="{{Asset('public/css/introduce.css')}}">
<div id="content">
	<div class="row">

		<div class="col-md-12">
			<div class="img_intro">
					<img src="{{Asset('public/images/introduce.jpg')}}">
			</div>
			<div class="content_intro">
				<h1>1.ESP ENGLISH</h1>
				
				<div class="text_intro">
					<p>
						{{$introduce[0]}}
					</p>

				</div>
			</div>
			<div class="content_intro">
				<h1>2. 	{{$introduce[1]}}</h1>
				<div class="text_intro">
					<ul>
						<li>
							<p>
								{{$introduce[2]}}
							</p>
						</li>
						<li>
							<ul>
								<li>
									<p>
										- {{$introduce[3]}}
									</p>
								</li>
								<li>
									<p>
										- {{$introduce[4]}}
									</p>
								</li>
								<li>
									<p>
										- {{$introduce[5]}}
									</p>
								</li>
								<li>
									<p>
										- {{$introduce[6]}}
									</p>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
</div>
	
@stop