<?php 
namespace App\Http\Controllers;

use App\News;
use App\News_Vn;
use App\News_English;
use App\Category;
use App\Menu;
use App\Contact;
use App\Introduce;
use App\Student;
use App\List_ChuyenNganh;
use App\List_ChuyenNganh_Eng;
use App\Comunicate_Eng;
use App\Comunicate;
use App\Tips_Eng;
use App\Tips_vn;
use App\List_Tips;

use Session;
use Input;
use Resource;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */

	public function index(){					
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
		$lang = Session::get('lang');
		$data = Menu::getLanguage($lang);
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh($lang);
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);
		return view('index',$data);
	}

	public function vn(){					
		Session::forget('lang');
		Session::put('lang', 'vn');
		$lang = Session::get('lang');
		$data = Menu::getLanguage('vn');
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh("vn");
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);
		return view('index',$data);
	}

	public function english(){					
		Session::forget('lang');
		Session::put('lang', 'eng');
		$data = Menu::getLanguage('eng');
		$lang = Session::get('lang');
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh("eng");
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);
		return view('index',$data);
	}

	public function news(){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
		$lang = Session::get('lang');
		if($lang == "vn"){
			$data = News_Vn::showNews($lang);
		}else{
			$data = News_English::showNews($lang);
		}
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh($lang);
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);
		return view('pages.news',$data);
	}

	public function news_details($id){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
		$lang = Session::get('lang');
		if($lang == "vn"){
			$data = News_vn::getNews_details($lang,$id);
		}else{
			$data = News_English::getNews_details($lang,$id);
		}
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh($lang);
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);
		return view('pages.news_details',$data);

	}	
	public function introduce(){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
		
		$lang = Session::get('lang');
		$data = Introduce::getLanguage($lang);
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh($lang);
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);
		return view('pages.introduce',$data);
	}


	public function chuyen_nganh(){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
		$lang = Session::get('lang');
		$data = Menu::getLanguage($lang);
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh($lang);
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);
		return view('pages.chuyen_nganh',$data);

	}
	public function post_chuyen_nganh(){
		return view('admin/');
	}

	public function giao_tiep(){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
		$lang = Session::get('lang');
		$data = Menu::getLanguage($lang);
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh($lang);
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);
		return view('pages.giao_tiep',$data);
	}

	public function contact(){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
	
		$lang = Session::get('lang');
		$data = Contact::getLanguage($lang);
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh($lang);
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);
		return view('pages.contact',$data);
	}

	public function addStudent(){
		$results = Input::all();
		$student = new Student;

		$student->name = $results['name'];
		$student->phone = $results['phone'];
		$student->email = $results['email'];
		$student->subject = $results['subject'];

		$student ->save();
		return "Đăng ký thành công!";
	}

	public function chuyen_nganh_detail($id){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
	
		$lang = Session::get('lang');
		$data = Contact::getLanguage($lang);
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh($lang);
		$data['content'] = List_ChuyenNganh::getDetails($lang,$id);
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);

		return view('pages.chuyen_nganh_details',$data);
	}

	public function giao_tiep_details($id){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
	
		$lang = Session::get('lang');
		$data = Contact::getLanguage($lang);
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh($lang);
		$data['content'] = Comunicate::getDetails($lang,$id);
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);

		return view('pages.giao_tiep_details',$data);
	}

	public function english_tip($id){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
	
		$lang = Session::get('lang');
		$data = Contact::getLanguage($lang);
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh($lang);
		$data['content'] = Comunicate::getDetails($lang,$id);
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);
		$data['list_tip'] = List_Tips::getTips($id); 
		return view('pages.english_tip',$data);

	}

	public function english_details($id){
		if (!Session::has('lang')) {
			Session::put('lang', 'vn');
			$lang = "vn";
		}
	
		$lang = Session::get('lang');
		$data = Contact::getLanguage($lang);
		$data['list_chuyenNganh'] = List_ChuyenNganh::getChuyenNganh($lang);
		$data['content'] = Comunicate::getDetails($lang,$id);
		$data['comunicate'] = Comunicate::getComunicate($lang);
		$data['tip'] = Tips_vn::getTips($lang);
		$data['details'] = List_Tips::where('id',$id)->first();
 		return view('pages.tip_details',$data);

	}
}
