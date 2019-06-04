@extends('common.homes')

@section('title', $title)
<link rel="stylesheet" type="text/css" href="/details/style/dialog.css">
@section('home')
	@php
		$gsrs = $goods->find($gsid);
		$gspics = $goodspicture->where('gid', $gsid)->select('gpic')->get();
		$posrs = $poster->where('type',3)->orderBy('id', 'desc')->take(3)->get();
		$recomrs = $goods->where('tid', $recommend->id)->take(4)->get();
	@endphp
<link href="/details/style/shopdetail.css" rel="stylesheet" type="text/css">
<div class="shopdetails">
	<!--放大镜-->
	<div id="leftbox">
	<div id="showbox">
	@foreach($gspics as $gskey => $gsval)
	  <img src="{{$gsval->gpic}}" width="400" height="550" />
	@endforeach

	</div><!--展示图片盒子-->
		<div id="showsum"></div><!--展示图片里边-->
		<p class="showpage">
 		 <a href="javascript:void(0);" id="showlast"> < </a>
  		 <a href="javascript:void(0);" id="shownext"> > </a>
		</p>
        
	</div>

    <div class="centerbox">
        <input type="hidden" id="gsid"  value="{{$gsrs->id}}">
    	<p class="imgname">{{$gsrs->gname}}</p>
    	<p class="Aprice">价格：<samp>￥{{$gsrs->price+1}}.00</samp></p>
    	<p class="price">促销价：<samp>￥{{$gsrs->price}}.00</samp></p>
    	<p class="youhui">店铺优惠：<samp>购物满两件打八折</samp></p>
    	<p class="kefu">客服：</p>
        <ul>
        <li class="kuanshi">款式：</li>
        	@foreach($gspics as $gsk=>$gsv)
	        <li class="shopimg"><a href="#" title="熊猫套装"><img src="{{$gsv->gpic}}" width="45"></a></li>
	        @endforeach
        </ul>
        <div class="clear"></div>
        <p class="chima">尺码：</p>
        <p class="buy"><a href="javascript:void(0);" class="cart" id="firstbuy">加入购物车</a><a href="/home/coll/{{$gsrs->id}}">收藏</a></p>
   		<div class="clear"></div>
 <!--        <div class="fenx"><a href="#"><img src="/details/images/shopdetail/tell07.png"></a></div> -->
        <p class="fuwu">服务承诺：</p>
        <p class="pay">支付方式：</p>
    </div>
 
   <div class="rightbox">
    	<p class="name">——热卖商品</p>
		@foreach($posrs as $posk=>$posv)
		<a href="#">
	    	<img src="{{$posv->url}}" width="130" height="180">
			<p>{{$posv->content}}</p>
		</a>
     	@endforeach
    	<!-- <img src="/details/images/shopdetail/reimai01.jpg" width="130" height="180">
		<p>￥58元</p>
        
        
    	<img src="/details/images/shopdetail/reimai03.jpg" width="130" height="180">
		<p>￥58元</p> -->
    </div>
       
</div>
<div class="evaluate">
    <div class="classify">
        <div class="shopsee">
            <p class="name">
               {{$recommend->tname}} 
            </p>
			@foreach($recomrs as $recomk=>$recomv)
			@php
				if($recomv->status == 3){
                    continue;
                }
                $recomps = $goodspicture->where('gid', $recomv->id)->select('gpic')->first();
			@endphp
            <a href="#" class="ex01">
                <img src="{{$recomps->gpic}}" width="170" height="245">
                <p align="center">
                    {{$recomv->gname}}
                </p>
                <p align="center">
                    商城价:{{$recomv->price}}元
                </p>
            </a>
            @endforeach
        </div>
    </div>
    <div class="tabbedPanels">
        <ul class="tabs">
            <li>
                <a href="#panel01">
                    商品详情
                </a>
            </li>
            <li>
                <a href="#panel02" class="active">
                    累计评价
                </a>
            </li>
        </ul>
        <div class="panelContainer">
            <div class="panel" id="panel01">
                <p class="sell">
                    商品描述
                </p>
                <p>
                    创意造型 浓浓文艺气息 闲暇时光 与好友分享
                </p>
                <p>
                </p>
                <p class="sell">
                    整体款式
                </p>
                {!!$gsrs->descr!!}
                <!-- <img src="/details/images/shopdetail/evaluate101.jpg"> -->
                <!-- <img src="/details/images/shopdetail/evaluate102.jpg"> -->
                <div class="clear">
                </div>
            </div>
            <!-- 商品评论 -->
            @php
             $cnums = 0;
            @endphp
            
            <div class="panel" id="panel02">
                <p class="sell">
                    买家评价
                </p>
                <p class="judge">
                    全部评价({{$nums}})
                </p>
                @foreach($comres as $comk=>$comv)
                <div class="judge01" style="margin-top:40px">
                    @php
                        $id = $users->where('username',$comv->uname)->select('id')->first();
                        $header = $message->where('uid',$id->id)->select('header')->first();
                    @endphp
                    <div class="idimg">
                        <img src="{{$header->header}}" height="40px">
                    </div>
                    <div class="write">
                        <p class="idname">
                            {{$comv->uname}}
                        </p>
                        <p>
                            @for($gi = 0; $gi < $comv->star; $gi ++)
                            <img src="/home/stars.jpg" height="30px" style="margin-left:-5px" alt="">
                            @endfor
                        </p>
                        <p>
                            <b style="font-size: 15px">{{$comv->content}}</b>
                        </p>
                        <p class="which">
                            留言时间:{{date('Y-m-d H:i:s', $comv->addtime)}}
                        </p>
                        @if($comv->url != null)
                        @php
                        $comurl = explode(',', $comv->url);
                        @endphp
                        @foreach($comurl as $k=>$v)
                        <img src="{{$v}}" width="40px" height="40px">
                        @endforeach
                        @endif
                    </div>
                </div>
                @endforeach
                <div class="clear">
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>
@stop

@section('js')
<script src="/details/js/zepto.min.js"></script>
<script type="text/javascript" src="/details/js/dialog.min.js"></script>
<script src="/details/js/jquery-1.9.1.min.js"></script>
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/details/js/common.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
	  var showproduct = {
		  "boxid":"showbox",
		  "sumid":"showsum",
		  "boxw":400,
		  "boxh":550,
		  "sumw":60,//列表每个宽度,该版本中请把宽高填写成一样
		  "sumh":60,//列表每个高度,该版本中请把宽高填写成一样
		  "sumi":7,//列表间隔
		  "sums":5,//列表显示个数
		  "sumsel":"sel",
		  "sumborder":1,//列表边框，没有边框填写0，边框在css中修改
		  "lastid":"showlast",
		  "nextid":"shownext"
		  };//参数定义	  
	 $.ljsGlasses.pcGlasses(showproduct);//方法调用，务必在加载完后执行
	 
	 $(function(){

		$('.tabs a').click(function(){
			
			var $this=$(this);
			$('.panel').hide();
			$('.tabs a.active').removeClass('active');
			$this.addClass('active').blur();
			var panel=$this.attr("href");
			$(panel).show();				
			return fasle;  //告诉浏览器  不要纸箱这个链接
			})//end click
			
			
			$(".tabs li:first a").click()   //web 浏览器，单击第一个标签吧
	

		
		})//end ready
		
		$(".centerbox li").click(function(){
			$("li").removeClass("now");
			$(this).addClass("now")
			
			});			
});

$('.cart').click(function(){
    var id = $('#gsid').attr('value');
    $.post('/home/cartajax', {'_token':"{{csrf_token()}}",id:id}, function(data){
        var inpa = $('.homes-cart').text(data);
    });
});
$('.cart').click(function(){
    popup({type:'success',msg:"操作成功",delay:1000,callBack:function(){
        
    }});
})
</script>
@stop