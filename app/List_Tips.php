<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tips_Eng;

class List_Tips extends Model {

	//posts table in database
	protected $table = 'list_tips';
	public static function getTips($id){
		$key = List_Tips::where('tip_id',$id)->orderBy('id', 'DESC')->paginate(5);
		$key ->setPath('');
		return $key;
	}
	
}
