@extends('admin.default')

@section('content')
<script type="text/javascript">
	$(function() {
	$('.btn_create').click(function () {
	var service = $(this).attr('data-service');

	jQuery.ajax({
			    crossDomain: true,
			    url: "delete_discuss",			
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
		<h1>Danh sách thảo luận</h1>
		<a href="{{URL::to('admin/discuss/create_discuss')}}"><p><i class="fa fa-plus-square" aria-hidden="true"></i> Tạo mới</a></p>
	</div>
	@foreach ($discuss as $discusses)
		<div class="details_news">
			<table>
				<tr>
					<td style="width:90%;" valign="top">
						<h2>{{$discusses['vn_tittle']}} sasd</h2>
						<?php
							echo str_limit($discusses['vietnam'], $limit = 150, $end = '...');
						?>
					</td>
					<td valign="top" style="width:10%;text-align:right;">
						<a href="{{URL::to('admin/discuss')}}" class="btn_create" id={{$discusses['id']}} data-service={{$discusses['id']}}>Xóa</a>
					</td>
				</tr>
			</table>
		</div>
   		<?php
   			//echo str_limit($new['vietnam'], $limit = 10, $end = '...');
   		?>
	@endforeach
	<div class="pagination">
			<?php
				echo $discuss->render();
			?>
	</div>
@stop 