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
use App\Model\Admin\Orders;
use App\Model\Admin\Detail;
use DB;

class OrdersController extends Controller
{
	//我的订单
    public function oindex(Request $request)
    {
    	$search = $request->oid;
    	$uid = session('uid');

    	$rs = Orders::where('oid','like','%'.$search.'%')->where('uid',$uid)->orderBy('id', 'desc')->get();
    	$goodspicture = new Goodspicture();
    	return view('home.usersgeren.orders',[
    		'rs'=>$rs,
    		'goodspicture'=>$goodspicture,
    		'request'=>$request,
    	]);
    }
}
