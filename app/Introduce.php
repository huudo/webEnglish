<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;
use App\Contact;
class Introduce extends Model {

	//posts table in database
        protected $table = 'introduce';
        public static function getLanguage($lang){
        	$menus = [];
        	$contacts= [];
                $introduces = [];

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

                $lengthIntro =  Introduce::select($lang)->count();
                $introduce = Introduce::select($lang)->orderBy('id','asc')->get();
                for($i=0; $i<$lengthIntro; $i++){
                        if($lang == 'vn'){
                                $introduces[$i] = $introduce[$i]->vn;
                        }else{
                                $introduces[$i] = $introduce[$i]->eng;
                        }               
                }


                $data['menu'] = $menus;
                $data['contact'] = $contacts;
                $data['introduce'] = $introduces;
                return $data;
        }
}
