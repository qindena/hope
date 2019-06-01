<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IntegralController extends Controller
{
    public function integral($id)
    {
    	$rs = DB::table('integral')->where('uid',$id)->first();
    	return view('admin.user.integral',[
	    		'title'=>'用户积分页面',
	            'rs'=>$rs,
    		]);
    }
}
