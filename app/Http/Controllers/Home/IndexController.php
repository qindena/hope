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
use App\Model\Admin\comment;
use App\Model\Admin\user;
use App\Model\Admin\message;
use DB;

class IndexController extends Controller
{
    public function index()
    {
    	$type = new TypeController();
    	// 导航栏的分类
    	$rs = $type->getfenleiMessage(15);
    	$goods = new Goods();
    	$goodspicture = new Goodspicture();
    	$link = new Link();
    	$lunbo = new Lunbo();
        $poster = new Poster();
    	
    	//左侧导航栏
    	$leftrs = $type->getfenleiMessage(26);
    	return view('home.index', [
    			'title'=>'首页',
    			'rs'=>$rs,
    			'goods'=>$goods,
    			'goodspicture'=>$goodspicture,
    			'leftrs'=>$leftrs,
    			'type'=>$type,
    			'link'=>$link,
    			'lunbo'=>$lunbo,
                'poster'=>$poster
    		]);
    }


    public function details(Request $request)
    {
    	$gsid = $request->id;
    	$type = new TypeController();
    	// 导航栏的分类1
    	$rs = $type->getfenleiMessage(15);
    	$goods = new Goods();
    	$goodspicture = new Goodspicture();

    	// 广告模块
    	$poster = new Poster();

        //评论模块
        $comment = new comment();
        $comres = comment::where('gid',$gsid)->get();
        $nums = count($comres);
        //用户信息模块
        $users = new user();
        $message = new message();
        $id = $users->where('username', 'timehongyan')->select('id')->first();
    	// 为你推荐模块
    	$recommend = Type::where('tname', '为你推荐')->first();
    	return view('home.xiangqin', [
    			'title'=>'商品详情',
    			'rs'=>$rs,
    			'goods'=>$goods,
    			'goodspicture'=>$goodspicture,
    			'type'=>$type,
    			'gsid'=>$gsid,
    			'poster'=>$poster,
    			'recommend'=>$recommend,
                'comment'=>$comment,
                'comres'=>$comres,
                'nums'=>$nums,
                'users'=>$users,
                'message'=>$message
    		]);
    }
}
