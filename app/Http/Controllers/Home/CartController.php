<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Goods;
use App\Model\Admin\Goodspicture;
use DB;
use Session;

class CartController extends Controller
{
    // 加入购物车ajax
    public function cartajax(Request $request)
    {
        $id = $request->id;
        if(Session::has('cart')){
            Session::push('cart',$id);
        } else {
            $arr = [];
            $arr[] = $id;
            Session::put('cart',$arr);
        }
    }

    //购物车前台遍历
    public function cartinfo(Request $request)
    {	
        $data = $request->session()->all();
        $cars = Session::get('cart');
        // dump($cars);
        if($cars == true){
            $cars = array_unique($cars);
            Session::put('cart',$cars);
            // dump($cars);
            $keys = array_keys($cars);
            // dump($keys);
            $rs = [];
            for($i = 0; $i < count($cars); $i++){
                $rs[] = Goods::where('id',$cars[$keys[$i]])->first();        
            }
        }else{
            $rs = [];
        }
        
        // dd($data);
        $goodspicture = new Goodspicture();
    	return view('home.cart.cartinfo',[
    		'title'=>'购物车详情',
            'rs'=>$rs,
            'goodspicture'=>$goodspicture
    	]);
    }

    //删除商品ajax
     public function remcart(Request $request)
    {
    	$gid = $request->gid;
        $cars = Session::get('cart');
        $key = array_search($gid, $cars);
        unset($cars[$key]);
        // dump($cars);
        $res = Session::put('cart',$cars);
        
    	if(1){

    		echo 1;
    	} else {

    		echo 0;

    	}
    }

    // 清空购物车ajax
    public function qk(Request $request)
    {
        //移除session
        Session::forget('cart');
        //echo 1;
    }



   


}
