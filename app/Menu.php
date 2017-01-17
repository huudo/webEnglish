<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ChuyenNganh;
use App\GiaoTiep;
use App\Comment_eng;
use App\Comment_vn;
use App\Contact;
class Menu extends Model {

	//posts table in database
	protected $table = 'menu';

	public static function getLanguage($lang){
		$menus = [];
        $chuyen_nganhs = [];
        $giao_tieps = [];
        $comments = [];
        $contacts = [];
		$length =  Menu::select($lang)->count();
        $menu= Menu::select($lang)->get();
        for($i=0;$i<$length;$i++){
        	if($lang == 'vn'){
        		$menus[$i] = $menu[$i]->vn;
        	}else{
        		$menus[$i] = $menu[$i]->eng;
        	}       	
        }
        $length_chuyennganh = ChuyenNganh::select($lang)->count();
        $chuyen_nganh = ChuyenNganh::select($lang)->get();
        for($i=0; $i<$length_chuyennganh; $i++){
            if($lang == "vn"){
                $chuyen_nganhs[$i] = $chuyen_nganh[$i]->vn;
            }else{
                 $chuyen_nganhs[$i] = $chuyen_nganh[$i]->eng;
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

        $length_giaotiep = GiaoTiep::select($lang)->count();
        $giao_tiep = GiaoTiep::select($lang)->get();
        for($i=0; $i<$length_giaotiep; $i++){
            if($lang == "vn"){
                $giao_tieps[$i] = $giao_tiep[$i]->vn;
            }else{
                 $giao_tieps[$i] = $giao_tiep[$i]->eng;
            }
        }
        if($lang=='eng'){
            $length_comment = Comment_eng::count();
            $comment = Comment_eng::get();
            
        }else{
            $length_comment = Comment_vn::count();
            $comment = Comment_vn::get();
        }
               
        $data['menu'] =$menus;
        $data['chuyen_nganh'] = $chuyen_nganhs;
        $data['giao_tiep'] = $giao_tieps;
        $data['comment'] = $comment;
        $data['contact'] = $contacts;
        return $data;
    }

}
