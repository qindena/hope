<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\Goods;
use DB;

class GoodsListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = $_GET['id'];

        $goods = DB::table('goods')->where('tid',$id)->get();

        return view('home/goods/listtype', ['goods'=>$goods,'id' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = session('uid');
        $rs = DB::table('orders')->where('uid',$id)->first();

        if(!$rs){
            return view('home/goods/city', ['uid' => $id]);
        } else {
            return view('home/goods/dindan',['rs'=>$rs]);
        }   
        //
        
    }


    public function citystore(Request $request)
    {
        $arr = $request->except('_token');
        $arr['email'] = '';
        $arr['header'] = 'default.jpg';
        $arr['integral'] = 0;
        
        // $rs = DB::table('message')->insertGetId($arr);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gname = $request->search;

        $rs = DB::table('goods')
        ->where('gname','like','%'.$gname.'%')->orderBy('id','desc')
        ->get();
        $arr = [];
        $res = [];
        foreach($rs as $k => $v){
            $res[] = DB::table('goodspicture')->where('gid',$v->id)->value('gpic');
            $arr[] = DB::table('type')->where('id',$v->tid)->get();
            
        }   

        $nres = array_unique($res);
        $narr =  array_unique($arr);

       // dump($rs);
       // dump($nres);
        return view('home/goods/list',['rs'=>$rs,'arr'=>$narr,'gname'=>$gname,'res'=>$nres]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
