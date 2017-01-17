<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\List_ChuyenNganh_Eng;

class List_ChuyenNganh extends Model {

	//posts table in database
	protected $table = 'list_chuyen_nganh';

	public static function getChuyenNganh($lang){
		if($lang == "vn"){
			$key = List_ChuyenNganh::all();
		}else{
			$key = List_ChuyenNganh_Eng::all();
		}

		return $key;
	}

	public static function getDetails($lang,$id){
		if($lang == "vn"){
			$key = List_ChuyenNganh::where('id',$id)->first();
		}else{
			$key= List_ChuyenNganh_Eng::where('id',$id)->first();
		}

		return $key;
	}

}
