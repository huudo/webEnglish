<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;
use App\Contact;
class News_Vn extends Model {

	//posts table in database
	protected $table = 'news_vn';
	
	public static function getNews(){
		 $new = News_Vn::orderBy('id', 'DESC')->paginate(5);
         $new->setPath('');
		 return $new;
	}
    public static function getNews_details($lang,$id){
        $menus = [];
        $contacts= [];
        $news = [];

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

       
        $new = News_Vn::where('id',$id)->first();
       
        

        $data['menu'] = $menus;
        $data['contact'] = $contacts;
        $data['new'] = $new;
        return $data;
    }
	public static function showNews($lang){
		$menus = [];
    	$contacts= [];
        $news = [];

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
        
        $new = News_Vn::get();
        $data['menu'] = $menus;
        $data['contact'] = $contacts;
        $data['new'] = $new;              
        return $data;
	}
}
