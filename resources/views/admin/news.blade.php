@extends('admin.default')

@section('content')
<script type="text/javascript">
	$(function() {
	$('.btn_create').click(function () {
	var service = $(this).attr('data-service');

	jQuery.ajax({
			    crossDomain: true,
			    url: "delete",
			
			    type: "POST",
			    dataType: "json",
			    processdata: true,
			    data: {
			        "service": service,
			        '_token': $('meta[name="csrf-token"]').attr('content')
			    },
			    success: function() {
			       console.log(12);
			    },
			    error: function (error) {
			        console.log(error);
			        //alert("xhr=" + xhr + " b=" + b + " c=" + c);
			    }
			});
	
		});
	});


</script>
	<div class="menu_action">
		<h1>Danh sách tin tức</h1>
		<a href="{{URL::to('admin/news/create_news')}}"><p><i class="fa fa-plus-square" aria-hidden="true"></i> Tạo mới</a></p>
	</div>
	@foreach ($news as $new)
		<div class="details_news">
			<table>
				<tr>
					<td style="width:90%;" valign="top">
						<h2>{{$new['tittle']}}</h2>
						<?php
							echo str_limit($new['content'], $limit = 150, $end = '...');
						?>
					</td>
					<td valign="top" style="width:10%;text-align:right;">
						<a href="{{URL::to('admin/news')}}" class="btn_create" id={{$new['id']}} data-service={{$new['id']}}>Xóa</a>
					</td>
				</tr>
			</table>
		</div>   		
	@endforeach
	<div class="pagination">
			<?php
				echo $news->render();
			?>
	</div>
@stop 