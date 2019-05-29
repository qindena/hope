<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CartsController extends Controller
{
    //
    public function create($id)
    {
    	$rs = DB::table('goods')->where('id',$id)->first();
    	$rs->num = 1;
    	$_SESSION['carts'][$id] = $rs;
    	dump($_SESSION);
    }
    
}
