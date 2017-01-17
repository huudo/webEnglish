<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tips_Eng;

class Tips_vn extends Model {

	//posts table in database
	protected $table = 'tip_vn';

	public static function getTips($lang){

		if($lang == "vn"){
			$key = Tips_vn::all();
		}else{
			$key = Tips_Eng::all();
		}

		return $key;
	}
}
