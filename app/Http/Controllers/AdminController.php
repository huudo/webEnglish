<?php namespace App\Http\Controllers;
use App\News;
use App\Discuss;
use App\Student;
use App\News_English;
use App\News_Vn;
use App\List_ChuyenNganh;
use App\List_ChuyenNganh_Eng;
use App\Comunicate;
use App\Comunicate_Eng;
use App\Tips_Eng;
use App\Tips_vn;
use App\List_Tips;

// use App\Category;
// use App\Menu;
// use App\Contact;
// use App\Introduce; 
use Input;

use Session;

class AdminController extends Controller {
	public function index(){		
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh("vn");
		$data['giao_tiep'] = Comunicate::getComunicate("vn");
		$data['tip'] = Tips_vn::getTips("vn");
		return view('admin.index',$data);
	}
	public function news(){
		$data['news'] = News_Vn::getNews();
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh("vn");
		$data['giao_tiep'] = Comunicate::getComunicate("vn");
		$data['tip'] = Tips_vn::getTips("vn");
		return view('admin.news',$data);
	}

	public function create_news(){
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh("vn");
		$data['giao_tiep'] = Comunicate::getComunicate("vn");
		$data['tip'] = Tips_vn::getTips("vn");
		return view('admin.create_news',$data);
	}

	public function post_create_news(){
		$input = Input::all();    
		$file = Input::file('pic');
		$file_name = $file->getClientOriginalName();
		$file->move(public_path().'/images/uploads',$file_name);

		$news_eng = new News_English;
		$news_eng -> tittle = $input['eng_tittle'];
		$news_eng -> content = $input['english'];
		$news_eng -> img = $file_name;

		$news_vn = new News_Vn;
		$news_vn -> tittle = $input['vn_tittle'];
		$news_vn -> content = $input['vietnam'];
		$news_vn -> img = $file_name;

		$news_eng -> save();
		$news_vn -> save();
		return redirect('admin/news');
	}

	public function delete(){
		$id = $_POST['service'];
		News_Vn::where('id',$id)->delete();
		News_English::where('id',$id)->delete();
		return redirect('admin/news');
	}

	public function discuss(){
		$data['discuss'] = Discuss::getDiscuss();
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh("vn");
		$data['giao_tiep'] = Comunicate::getComunicate("vn");
		$data['tip'] = Tips_vn::getTips("vn");
		return view('admin.discuss',$data);
	}

	public function create_discuss(){
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh("vn");
		$data['giao_tiep'] = Comunicate::getComunicate("vn");
		$data['tip'] = Tips_vn::getTips("vn");
		return view('admin.create_discuss');
	}

	public function post_create_discuss(){
		$input = Input::all();    
		$discuss = new Discuss;
		$discuss -> tittle_vietnam	 = $input['vn_tittle'];
		$discuss -> tittle_english	 = $input['eng_tittle'];
		$discuss -> vietnam = $input['vietnam'];
		$discuss -> english = $input['english'];
		$file = Input::file('pic');
		$file_name = $file->getClientOriginalName();
		$file->move(public_path().'/images/uploads',$file_name);
		$discuss -> img = $file_name;
		$discuss -> save();		
		return redirect('admin/discuss');
	}

	public function delete_discuss(){
		$id = $_POST['service'];
		Discuss::where('id',$id)->delete();
		return redirect('admin/discuss');
	}

	public function getStudent(){
		$data['students'] = Student::getStudent();
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh("vn");
		$data['giao_tiep'] = Comunicate::getComunicate("vn");
		$data['tip'] = Tips_vn::getTips("vn");
		return view('admin.students',$data);
	}

	public function accept_student(){
		$id = $_POST['service'];
		Student::where('id',$id)->update(['accept'=>1]);
		return redirect('admin/students');
	}

	public function chuyen_nganh($id){
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh("vn");
		$data['vn'] = List_ChuyenNganh::getDetails("vn",$id);
		$data['eng'] = List_ChuyenNganh::getDetails("eng",$id);
		$data['giao_tiep'] = Comunicate::getComunicate("vn");
		$data['tip'] = Tips_vn::getTips("vn");
		return view('admin.chuyen_nganh',$data);
	}
	public function post_chuyen_nganh($id){
		$input = Input::all(); 
		$content_vn = $input['vietnam'];
		$content_eng = $input['english'];
		   
		List_ChuyenNganh::where('id',$id)->update(['content' => $content_vn]);
		List_ChuyenNganh_Eng::where('id',$id)->update(['content' => $content_eng]);
		return redirect('admin/chuyen_nganh'.'/'.$id);
	}

	public function giao_tiep($id){
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh("vn");
		$data['vn'] = Comunicate::getDetails("vn",$id);
		$data['eng'] = Comunicate::getDetails("eng",$id);
		$data['giao_tiep'] = Comunicate::getComunicate("vn");
		$data['tip'] = Tips_vn::getTips("vn");
		return view('admin.giao_tiep',$data);
	}

	public function post_giao_tiep($id){
		$input = Input::all(); 
		$content_vn = $input['vietnam'];
		$content_eng = $input['english'];
		   
		Comunicate::where('id',$id)->update(['content' => $content_vn]);
		Comunicate_Eng::where('id',$id)->update(['content' => $content_eng]);
		return redirect('admin/giao_tiep'.'/'.$id);
	}
	
	public function english_tip($id){
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh("vn");
		$data['giao_tiep'] = Comunicate::getComunicate("vn");
		$data['tip'] = Tips_vn::getTips("vn");
		$data['tip_name'] = Tips_vn::select('name')->where('id',$id)->first();
		$data['tip_id'] = $id;
		$data['list_tip'] = List_Tips::getTips($id);
		
		return view('admin.english_tip',$data);
	}

	public function post_english_tip($id){
		
	}

	public function create_tip($id){
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh("vn");
		$data['giao_tiep'] = Comunicate::getComunicate("vn");
		$data['tip'] = Tips_vn::getTips("vn");
		$data['tip_name'] = $id;
		return view('admin.create_tips',$data);
	}

	public function post_create_tip($id){
		$tip = new List_Tips;
		$input = Input::all(); 
		$tip->tittle = $input['vn_tittle'];
		$tip->content = $input['vietnam'];
		$tip->tip_id = $id;
		$tip->save();
		return redirect('admin/english_tip'.'/'.$id);
	}

	public function delete_tip(){
		$id = $_POST['service'];
		$tip_id = List_Tips::select('tip_id')->where('id',$id)->first();
		List_Tips::where('id',$id)->delete();
		return redirect('admin/english_tip/'.$tip_id);
	}
}