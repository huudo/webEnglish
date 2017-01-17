@extends('admin.default')
@section('content')
	<form  enctype="multipart/form-data" method="POST" action={{URL::to('admin/english_tip/create_tip').'/'.$tip_name}}>
	<div class="tieng_viet">
		<h1>Bài viết Tiếng Việt</h1>
		<span>Tiêu đề</span> <input type="text" name="vn_tittle" class="vn_tittle" required /></br>		
		<textarea id="editor1" class="ckeditor" name="vietnam" required></textarea>  
  
		<script type="text/javascript">  
			CKEDITOR.replace( 'editor1' );  
		</script>  		
	</div>
	<input type="submit" value="Tạo tin" name="btn_create" class="btn_create" />
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
@stop