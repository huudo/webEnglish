<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;
use App\Contact;
class News extends Model {

	//posts table in database
	protected $table = 'news';
	
	public static function getNews(){
		 $new = News::orderBy('id', 'DESC')->paginate(5);
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

               
                $new = News::where('id',$id)->first();
               
                $news['img'] = $new->img;
                $news['id'] = $new->id;
                if($lang == 'vn'){
                        $news['tittle'] = $new->tittle_vietnam;
                        $news['content'] = $new->vietnam;
                }else{
                        $news['tittle'] = $new->tittle_english;
                        $news['content'] = $new->english;
                }               
        
                $data['menu'] = $menus;
                $data['contact'] = $contacts;
                $data['new'] = $news;
                return $data;
                 return $new;
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

                $lengthNew =  News::all()->count();
                $new = News::get();
                for($i=0; $i<$lengthNew; $i++){
                		$news[$i]['img'] = $new[$i]->img;
                                $news[$i]['id'] = $new[$i]->id;
                        if($lang == 'vn'){
                                $news[$i]['tittle'] = $new[$i]->tittle_vietnam;
                                $news[$i]['content'] = $new[$i]->vietnam;
                        }else{
                                $news[$i]['tittle'] = $new[$i]->tittle_english;
                                $news[$i]['content'] = $new[$i]->english;
                        }               
                }

                $data['menu'] = $menus;
                $data['contact'] = $contacts;
                $data['new'] = $news;              
                return $data;
	}
}
