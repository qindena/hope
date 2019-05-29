<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\TypeController;
use App\Model\Admin\Type;
use App\Model\Admin\Goods;
use App\Model\Admin\link;
use App\Model\Admin\Lunbo;
use App\Model\Admin\Goodspicture;
use App\Model\Admin\Poster;
use DB;

class CollectController extends Controller
{
    //
    public function index(Request $request)
    {
    	$type = new TypeController();
    	// 导航栏的分类
    	$rs = $type->getfenleiMessage(15);
    	$goods = new Goods();
    	$goodspicture = new Goodspicture();
    	$link = new Link();
    	$lunbo = new Lunbo();
		//左侧导航栏
    	$leftrs = $type->getfenleiMessage(26);
    	
    	$co = DB::table('collect')->get();
    	dd(empty($co));
    	return view('home.usersgeren.collect', [
    			'rs'=>$rs,
    			'goods'=>$goods,
    			'goodspicture'=>$goodspicture,
    			'leftrs'=>$leftrs,
    			'type'=>$type,
    			'link'=>$link,
    			'lunbo'=>$lunbo,
    			'co'=>$co
    		]);
    }

    public function coll($id)
    {
    	$coll = Goods::where('id', $id)->first();
    	$collpic = Goodspicture::where('gid',$coll->id)->get();
    	if ($coll && $collpic) {
    		$collect['gid'] = $coll->id;
	    	$collect['gname'] = $coll->gname;
	    	$collect['price'] = $coll->price;
	    	
	    	$collect['pid'] = $collpic[0]->id;
	    	$collect['gpic'] = $collpic[0]->gpic;
	    	
	    	
			$collc = DB::table('collect')->where('gid',$collect['gid'])->first();
	    	if(!$collc){
	    		$colls = DB::table('collect')->insert($collect);
	    	}
    	}
    	return back();
    }

    public function colls($id)
    {
    	$collc = DB::table('collect')->where('id',$id)->first();
    	if ($collc) {
    		$collc = DB::table('collect')->where('id',$id)->delete();
    	}
    	return redirect('home/collect');
    }
}
