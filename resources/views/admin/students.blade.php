@extends('admin.default')

@section('content')
<script type="text/javascript">
	$(function() {
	$('.btn_create').click(function () {
	var service = $(this).attr('data-service');

	jQuery.ajax({
			    crossDomain: true,
			    url: "accept_student",			
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
		<h1>Danh sách sinh viên</h1>		
	</div>
	<div>
		@foreach ($students as $student)
			<div class="student_details">
				<table>				
					<tr>
						<td style="width:90%;" valign="top">
							<p>Họ tên: {{$student['name']}}</p>
							<p>Điện thoại: {{$student['phone']}}</p>
							<p>Email: {{$student['email']}}</p>
							<p>Môn học: {{$student['subject']}}</p>
						</td>
						<td valign="top" style="width:10%;text-align:right;">
							@if($student['accept'] == 0)
							<a href="{{URL::to('admin/students')}}" class="btn_create" id={{$student['id']}} data-service={{$student['id']}}>Xem</a>
							@else
							<a href="" class="btn_accepted">Đã xem</a>
							@endif
						</td>
					</tr>			
				</table>

			</div>
		@endforeach
		<div class="pagination">
			<?php
				echo $students->render();
			?>
		</div>
	</div>
	
@stop 