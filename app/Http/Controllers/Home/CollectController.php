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
    //我的收藏
    public function index(Request $request)
    {	
    	$uid = session('uid');
    	$co = DB::table('collect')->where('uid',$uid)->get();
    	return view('home.usersgeren.collect', [
    			'co'=>$co
    		]);
    }

    //添加我的收藏
    public function coll($id)
    {
    	$uid = session('uid');
    	$coll = Goods::where('id', $id)->first();
    	$collpic = Goodspicture::where('gid',$coll->id)->get();
    	if ($coll && $collpic && $uid) {
    		$collect['uid'] = $uid;
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

    //删除我的收藏
    public function colls($id)
    {
    	$collc = DB::table('collect')->where('id',$id)->first();
    	if ($collc) {
    		$collc = DB::table('collect')->where('id',$id)->delete();
    	}
    	return redirect('home/collect');
    }
}
