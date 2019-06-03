@extends('common.homes')

@section('title', $title)
<style>
	#star{
		margin-left: 0px;
	}
	.btn{
		margin-left: 50px;
		margin-top: 10px;
		width: 100px;
		height: 40px;
		background: #ff6700;
		border: 1px solid #ff6700;
	}
</style>
@section('home')
<div class="grzxbj">
	<div class="selfinfo center">
		<div class="lfnav fl">
			<div class="ddzx">订单中心</div>
			<div class="subddzx">
				<ul>
					<li><a href="" style="color:#ff6700;font-weight:bold;">我的订单</a></li>
					<li><a href="">意外保</a></li>
					<li><a href="">团购订单</a></li>
					<li><a href="">评价晒单</a></li>
				</ul>
			</div>
			<div class="ddzx">个人中心</div>
			<div class="subddzx">
				<ul>
					<li><a href="./self_info.html">我的个人中心</a></li>
					<li><a href="">消息通知</a></li>
					<li><a href="">优惠券</a></li>
					<li><a href="">收货地址</a></li>
				</ul>
			</div>
		</div>
		<div class="rtcont fr">
			<div class="ddzxbt">商品信息</div>
			<div class="ddxq">
				<div class="ddspt fl"><img src="{{$goods->gpic}}" height="80px" alt=""></div>
				<div class="ddbh fl">{{$goods->gname}}</div>
				<div class="ztxx fr">
					<ul>
						<li>已收货</li>
						<li>￥{{$goods->price}}</li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<form action="/home/coms" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
				<div class="coms" >
				<p>
					<div id="star">
						<span>商品星级打分</span>
						<ul>
							<li class="status"><a href="javascript:;">1</a></li>
							<li class="status"><a href="javascript:;">2</a></li>
							<li class="status"><a href="javascript:;">3</a></li>
							<li class="status"><a href="javascript:;">4</a></li>
							<li class="status"><a href="javascript:;">5</a></li>
						</ul>
						<span></span>
						<p></p>
					</div>
				</p>
				<input type="hidden" name="star" id="sta" value="">
				<input type="hidden" name="uname" value="{{$uname->username}}">
				<input type="hidden" name="gid" value="{{$goods->id}}">
				<p>
					上传图片: &nbsp;&nbsp;
					<input type="file" multiple name="url[]" >
				</p>
				<p>
					评价商品:
					<textarea name="content" id="" cols="100" rows="10" style="resize:none"></textarea>
				</p>
				<hr>
				<button class="btn">发布评论</button>
				</div>
			</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="/home/css/style.css">
@stop
<style>
	*{margin:0;padding:0;list-style-type:none;}
	body{color:#666;font:12px/1.5 Arial;}
	/* star */
	#star{position:relative;width:1000px;margin:20px auto;height:24px;}
	#star ul,#star span{float:left;display:inline;height:19px;line-height:19px;}
	#star ul{margin:0 10px;}
	#star li{float:left;width:24px;cursor:pointer;text-indent:-9999px;background:url(/home/images/images/star.png) no-repeat;}
	#star strong{color:#f60;padding-left:10px;}
	#star li.on{background-position:0 -28px;}
	#star p{position:absolute;top:20px;width:159px;height:60px;display:none;background:url(/home/images/images/icon.gif) no-repeat;padding:7px 10px 0;}
	#star p em{color:#f60;display:block;font-style:normal;}
</style>
@section('js')
<script type="text/javascript"> 

window.onload = function (){

	var oStar = document.getElementById("star");
	var aLi = oStar.getElementsByTagName("li");
	var oUl = oStar.getElementsByTagName("ul")[0];
	var oSpan = oStar.getElementsByTagName("span")[1];
	var oP = oStar.getElementsByTagName("p")[0];
	var i = iScore = iStar = 0;
	var aMsg = [
				"很不满意|差得太离谱，与卖家描述的严重不符，非常不满",
				"不满意|部分有破损，与卖家描述的不符，不满意",
				"一般|质量一般，没有卖家描述的那么好",
				"满意|质量不错，与卖家描述的基本一致，还是挺满意的",
				"非常满意|质量非常好，与卖家描述的完全一致，非常满意"
				]
	
	for (i = 1; i <= aLi.length; i++){
		aLi[i - 1].index = i;
		
		//鼠标移过显示分数
		aLi[i - 1].onmouseover = function (){
			fnPoint(this.index);
			//浮动层显示
			oP.style.display = "block";
			//计算浮动层位置
			oP.style.left = oUl.offsetLeft + this.index * this.offsetWidth - 104 + "px";
			//匹配浮动层文字内容
			oP.innerHTML = "<em><b>" + this.index + "</b> 分 " + aMsg[this.index - 1].match(/(.+)\|/)[1] + "</em>" + aMsg[this.index - 1].match(/\|(.+)/)[1]
		};
		
		//鼠标离开后恢复上次评分
		aLi[i - 1].onmouseout = function (){
			fnPoint();
			//关闭浮动层
			oP.style.display = "none"
		};
		
		//点击后进行评分处理
		aLi[i - 1].onclick = function (){
			iStar = this.index;
			oP.style.display = "none";
			oSpan.innerHTML = "<strong>" + (this.index) + " 分</strong> (" + aMsg[this.index - 1].match(/\|(.+)/)[1] + ")"
		}
	}
	
	//评分处理
	function fnPoint(iArg){
		//分数赋值
		iScore = iArg || iStar;
		for (i = 0; i < aLi.length; i++) aLi[i].className = i < iScore ? "on" : "";	
	}
	
};
$('.status').click(function(){
	// alert('1');
	var status = $(this).find('a').text();
	// console.log(status);
	var inp = $('#sta').val(status);
	// console.log(inp);
});
</script>
@stop