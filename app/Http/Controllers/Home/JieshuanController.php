<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DB;
use Session;

class JieshuanController extends Controller
{
	//确认订单页面
    public function jiesuan(Request $request)
    {
    	if(! Session::has('city')){
    		return redirect('/home/city');
    	}
    	$uid = session('uid');
    	$gid = session::get('temcart');
    	$total = 0;
    	$oid = [];
    	$num = session::get('gnum');
    	$rs = [];
    	$counts = 0;
    	$totals = 0;
    	$data = [];
    	foreach($gid as $k => $v){
    		$goods = DB::table('goods')->where('id',$v)->first();
    		$price = $goods->price;
    		$gname = $goods->gname;
    		$pic = DB::table('goodspicture')->where('gid',$v)->first()->gpic;
    		$data['gpic'] = $pic;
    		$total = $price*$num[$k];
    		$counts += $num[$k];
    		$totals += $price*$num[$k];
    		$data['price'] = $price;
    		$data['gname'] = $gname;
    		$data['uid'] = $uid;
    		$data['num'] = $num[$k];
    		$data['total'] = $total;
    		$data['gid'] = $v;
    		$rs[] = $data;
    	}
    	$rs[0]['totals'] = $totals;
    	$rs[0]['counts'] = $counts;
    	$city = Session::get('city');
    	Session::put('orders',$rs);
	    	return view('home/jiesuan/dindan',['rs' => $rs,'city' => $city]);

    }

    public function dojiesuan()
    {
    	// $data = Session::all();
    	// dump($data);\
    	// 
    	$rs =  session('orders');

    	// dd($rs);
    	if($rs == null){
    		return redirect('/');
    	}
    	$city = session('city');
    	$uid = session('uid');
    	//获取的积分
    	$uinte = intval(ceil($rs[0]['totals']/100));
    	// 总金额
    	$umoney = intval($rs[0]['totals']);
    	// dump($uinte);
    	// dump($umoney);
    	$arr = [];
		foreach($rs as $k => $v){
			$arr[$k]['uid'] = $v['uid'];
			$arr[$k]['total'] = intval($v['total']);
			$arr[$k]['num'] = $v['num'];
			$arr[$k]['addtime'] = time();
			$arr[$k]['oname'] = $city['oname'];
			$arr[$k]['phone'] = $city['phone'];
			$arr[$k]['address'] = $city['address'];
			$arr[$k]['oid'] = time().rand('111','999');

			$detail[$k]['gid'] = $v['gid'];

			$detail[$k]['gname'] = $v['gname'];
			$detail[$k]['price'] = intval($v['price']);
			$detail[$k]['num'] = $v['num'];

			// $detail[$k]['$']
		}
		// dump($arr);
		// dump($detail);
		foreach($arr as $ks=>$vs){
			
			$oid = DB::table('orders')->insertGetId($vs);
			$detail[$ks]['oid'] = $oid;
			// dump($detail[$ks]);
			$res = DB::table('detail')->insert($detail[$ks]);	
		}
		// dd(1);
		$uinters = DB::table('integral')->where('uid',$uid)->first();
		// dump($uinters);
		$integral = [];
		if($uinters == null){
			$integral['uid'] = $uid;
			$integral['umoney'] = $umoney;
			$integral['uinte'] = $uinte;
			// dump($integral);
			$interes = DB::table('integral')->insert($integral);
		}else{
			$money = $uinters->umoney;
			$inte = $uinters->uinte;
			$uid = $uinters->uid;
			$integral['umoney'] = $money+$umoney;
			$integral['uinte'] = $inte+$uinte;
			// dump($integral);
			$interes = DB::table('integral')->where('uid',$uid)->update($integral);
		}
		// $integral['']
		// dump($data);
		if($res){
			$cart = Session('cart');
			$temcart = Session('temcart');
			foreach($temcart as $ck=>$cv){
				$key = array_search($cv, $cart);
				// echo $key;
				unset($cart[$key]);
			}
			if($cart == null){
				Session::forget('cart');
			}else{
				Session::put('cart', $cart);
			}
			Session::forget('temcart');
			Session::forget('gnum');
			Session::forget('orders');
			return view('home/jiesuan/order',['rs'=>$arr]);
		}

    }


    //填写地址页面
	public function city()
	{
		return view('home/jiesuan/city');
	}	
    public function docity(Request $request)
    {
    	// dd(1);
    	$city = $request->except('_token');
    	// dd($city);
    	Session::put('city',$city);
    	// $data = Session::all();
    	// dd($data);
    	return redirect('/home/jiesuan');
    }
}
