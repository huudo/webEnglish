<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;
use App\Contact;
class Discuss extends Model {

	//posts table in database
	protected $table = 'discuss';
	
	public static function getDiscuss(){
		$discuss = Discuss::orderBy('id', 'DESC')->paginate(5);
                $discuss->setPath('');
		return  $discuss;
	}
	public static function showDiscuss($lang){
		$menus = [];
        	$contacts= [];
                $discusses = [];

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

                $lengthDiscuss =  News::all()->count();
                $discuss = Discuss::get();
                for($i=0; $i<$lengthDiscuss; $i++){
                		$discusses[$i]['img'] = $discuss[$i]->img;
                        if($lang == 'vn'){
                                $discusses[$i]['tittle'] = $discuss[$i]->tittle_vietnam;
                                $discusses[$i]['content'] = $discuss[$i]->vietnam;
                        }else{
                                $discusses[$i]['tittle'] = $discuss[$i]->tittle_english;
                                $discusses[$i]['content'] = $discuss[$i]->english;
                        }               
                }
                
                $data['menu'] = $menus;
                $data['contact'] = $contacts;
                $data['discuss'] = $discusses;
                return $data;
	}
}
