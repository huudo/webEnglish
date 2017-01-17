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
		<h1>{{$vn['name']}}</h1>
	<form  enctype="multipart/form-data" method="POST" action={{URL::to('admin/chuyen_nganh/').'/'.$vn['id']}}>
	<div class="tieng_viet">
		<h1>Bài viết Tiếng Việt</h1>		
		<textarea id="editor1" class="ckeditor" name="vietnam" required>{{$vn['content']}}</textarea>  
  
		<script type="text/javascript">  
			CKEDITOR.replace( 'editor1' );  
		</script>  
		
	</div>
	<div class="tieng_anh">
		<h1>Bài viết Tiếng Anh</h1>		
		<textarea id="editor2" class="ckeditor" name="english" required>{{$eng['content']}}</textarea>  
  
		<script type="text/javascript">  
			CKEDITOR.replace( 'editor2' );  
		</script>  		
	</div>
	<input type="submit" value="Tạo tin" name="btn_create" class="btn_create" />
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
	</div>		
@stop 