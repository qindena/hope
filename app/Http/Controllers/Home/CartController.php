<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Goods;
use DB;
use Session;

class CartController extends Controller
{
    //
    public function cartinfo(Request $request,$id)
    {	
        session_start();
        $cat = [];
        $_SESSION['cat'] = $cat;
        $_SESSION['cat'][] = $id;

        dump($_SESSION);
        redirect("/");



    	/*return view('home.cart.cartinfo',[
    		'title'=>'购物车详情',
    		'rs'=>$rs,
    	]);*/
    }
     public function remcart(Request $request)
    {
    	$gid = $request->gid;

    	$res = DB::table('goods')->where('id',$gid)->delete();

    	if($res){

    		return response()->json(['success'=>'删除成功','code'=>1]);
    	} else {

    		return response()->json(['error'=>'删除失败','code'=>0]);

    	}
    }
}
