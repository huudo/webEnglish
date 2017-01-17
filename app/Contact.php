<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;

class Contact extends Model {

	//posts table in database
	protected $table = 'contact';
	public static function getLanguage($lang){
		$menus = [];
		$contacts= [];

		$length =  Menu::select($lang)->count();
        $menu= Menu::select($lang)->get();
        for($i=0;$i<$length;$i++){
        	if($lang == 'vn'){
        		$menus[$i] = $menu[$i]->vn;
        	}else{
        		$menus[$i] = $menu[$i]->eng;
        	}       	
        }

        $lengthC =  Contact::select($lang)->count();
        $contact = Contact::select($lang)->get();
        for($i=0;$i<$lengthC;$i++){
        	if($lang == 'vn'){
        		$contacts[$i] = $contact[$i]->vn;
        	}else{
        		$contacts[$i] = $contact[$i]->eng;
        	}       	
        }

        $data['menu'] = $menus;
        $data['contact'] = $contacts;
        return $data;
	}
}
