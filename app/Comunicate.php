<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comunicate_Eng;

class Comunicate extends Model {

	//posts table in database
	protected $table = 'comunicate';

	public static function getComunicate($lang){
		if($lang == "vn"){
			$key = Comunicate::all();
		}else{
			$key = Comunicate_Eng::all();
		}

		return $key;
	}

	public static function getDetails($lang,$id){
		if($lang == "vn"){
			$key = Comunicate::where('id',$id)->first();
		}else{
			$key= Comunicate_Eng::where('id',$id)->first();
		}
		return $key;
	}

}
