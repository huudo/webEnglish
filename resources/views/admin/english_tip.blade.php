@extends('admin.default')

@section('content')
<script type="text/javascript">
	$(function() {
	$('.btn_create').click(function () {
	var service = $(this).attr('data-service');

	jQuery.ajax({
			    crossDomain: true,
			    url: "delete_tip",
			
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
		<h1>{{$tip_name->name}}</h1>
		<a href={{URL::to('admin/english_tip/create_tip').'/'.$tip_id}}><p><i class="fa fa-plus-square" aria-hidden="true"></i> Tạo mới</a></p>
	</div>
	@foreach ($list_tip as $tips)
		<div class="details_news">
			<table>
				<tr>
					<td style="width:90%;" valign="top">
						<h2>{{$tips['tittle']}}</h2>
						<?php
							echo str_limit($tips['content'], $limit = 150, $end = '...');
						?>
					</td>
					<td valign="top" style="width:10%;text-align:right;">
						<a href={{URL::to('admin/english_tip').'/'.$tip_id}} class="btn_create" id={{$tips['id']}} data-service={{$tips['id']}}>Xóa</a>
					</td>
				</tr>
			</table>
		</div>   		
	@endforeach
	<div class="pagination">
			<?php
				echo $list_tip->render();
			?>
	</div>
@stop 