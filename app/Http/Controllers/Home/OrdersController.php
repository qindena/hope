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

    	$rs = Orders::where('oid','like','%'.$search.'%')->where('uid',$uid)->get();
    	$goodspicture = new Goodspicture();
    	return view('home.usersgeren.orders',[
    		'rs'=>$rs,
    		'goodspicture'=>$goodspicture,
    		'request'=>$request,
    	]);
    }

    //删除我的订单
    public function oin(Request $request, $id)
    {
    	$rs = Orders::find($id);
        //删除订单时删除订单详情
        $det = Detail::where('oid', $rs->oid)->delete();

        if(!$det){
            return back();
        }
        //根据id删除数据
        $data = Orders::destroy($id);

        if($data){
            return redirect('/home/oindex');
        } else {
            return back();
        }
    }
}
