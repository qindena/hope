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

    // 评论页面
    public function comment(Request $request)
    {
        $goods = Goods::where('id', $request->id)->first();
        $goods->gpic = Goodspicture::where('gid', $request->id)->select('gpic')->first()->gpic;
        $uid = session('uid');
        $uname = DB::table('users')->where('id',$uid)->select('username')->first();
        // dump($uname->username);
        // dump($goods);
        return view('home.usersgeren.comment', [
                'title'=>'商品评论',
                'goods'=>$goods,
                'uname'=>$uname
            ]);
    }

    public function coms(Request $request)
    {
        $rs = $request->except('_token','url');
        $rs['addtime'] = time();
        // dump($rs);
        if($request->hasFile('url')){
            $file = $request->file('url');
            // dump($file);
            $arr = [];
            // $gid = $data->id;
            // dd($gid);
            foreach($file as $k=>$v){
                // 图片的新名字
                $name = md5('img_'.rand(1111,9999).time());
                // 获取文件后缀
                $suffix = $v->getClientOriginalExtension();
                // 文件上传
                $v->move('./uploads/gimgs',$name.'.'.$suffix);
                $arr[] = '/uploads/gimgs/'.$name.'.'.$suffix;
            }
            // dump($arr);
            $arrstr = implode(',',$arr);
            // dump($arrstr);
            $rs['url'] = $arrstr;
        }
        $res = DB::table('comment')->insert($rs);
        if($res){
            echo "<script>alert('评论成功');location.href='/home/details?id={$rs['gid']}'</script>";
        }else{
            echo "<script>alert('评论失败');location.href='/home/oindex'</script>";
        }
    }
}
