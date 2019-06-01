@extends('common.cart')

@section('title',$title)

@section('cart')
<style type="text/css">
	.check{-webkit-appearance: checkbox;}

	
</style>
<div id="cart">
<div class="container">

<table class="table table-hover">
<div class="bs-example" data-example-id="hoverable-table">
	
<!-- <form action="/home/jiesuan" method="post" enctype="multipart/form-data"> -->
<form action="javascript:void(0)" method="get" enctype="multipart/form-data">
    <table class="table table-hover">
@if ($rs)
      <thead>
        <tr>
          <th><a href="javascript:void(0)" class='as'>全选</a></th>
          <th>商品图片</th>
          <th>商品名称</th>
          <th>单价</th>
          <th>数量</th>
          <th>小计</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody class="catbody">
      	@foreach($rs as $k=>$v)

        <tr>
			<td>
			<input type="checkbox" class="check" gid='{{$v->id}}' name="id[]" value="{{$v->id}}" />
			</td>
         	 @php
					$res = $goodspicture->select('gpic')->where('gid',$v->id)->first();
			@endphp
          <td><img src="{{$res->gpic}}" style="width:80px"></td>
          <td>{{$v->gname}}</td>
          <td class="prc">{{$v->price}}</td>
          <th>
          	<div class="quantity clearfix">
				<input type="button" value="-" class="minus">
				<input type="text" name="num[]" value="1" class="qty" style="width:25px;text-align:center;" />
				<input type="button" value="+" class="plus">
			</div>
		</th>
          <td>¥<span class="amount">{{$v->price}}元</span></td>
          <td>
			<span class="remove btn btn-danger">删除</span>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    {{csrf_field()}}
    
  </div>
</table>

</div>

		<div class="jiesuandan mt20 center" >
				<div class="tishi fl ml20">
					<ul>
						<li><a href="/">继续购物</a></li>
						<li><a href="javascript:void(0)" class="qk">清空购物车</a></li>
						
						<div class="clear"></div>
					</ul>
				</div>
				<div class="jiesuan fr">
					<div class="amount jiesuanjiage fl" >合计（不含运费）：<span id="total">0</span></div>
					<div class="jsanniu fr"><input class="jsan" type="submit" name="jiesuan" value="去结算"></div>
					<div class="clear"></div>
				</div>
				<div class="clear" ></div>
			</div>			
</div>

</form>
@else
<div class="cartclear" >
			<div class="cart1">
				<h2>你的购物车是空的!</h2>
				<a href="/">
					<div class="cart2">
						马上去购物
					</div>
				</a>
			</div>
</div>
@endif

@stop

@section('js')
<script>
	// 去结算
	$('.jsan').click(function(){
		var arr = $('.check');
		var arrs = {};
		var gnum = {};
		for(var i = 0; i < arr.length; i++){
			var checks = arr[i];
			var nums = $(checks).prop('checked');
			// console.log(nums);
			if(nums == true){
				var cid = $(checks).parents('tr').find('.check').val();
				// console.log(cid);
				arrs[i] = cid;
				// var cnum = $(checks).parents('tr').children('th').clildren('div').children('.qty');
				var cnum = $(checks).parents('tr').find('.qty').val();
				// console.log(cnum);
				gnum[i] = cnum;
			}
		}
		// console.log(arrs);
		// console.log(gnum);
		$.post('/home/cartmath', {'_token':"{{csrf_token()}}",cartid:arrs,gnum:gnum}, function(data){
			// console.log(data);
			window.location.href = "/home/jiesuan";
		})
	});
	//全选
	$('.as').click(function(){
		//$('.check').attr('checked',true)
		$('.check').each(function(){
		this.checked = !this.checked;
		});
		getTotals();
	})
	//点击多选框
	$('.check').click(function(){

		getTotals();
	})
	
	

	//加
	$('.plus').click(function(){
		//点加多选框选中
		
		//$('.check').attr('checked',true);
		//获取数量
		var  num = $(this).prev().val().trim();
		num++;
		$(this).prev().val(num);
		//获取单价
		 var pr = $(this).parents('tr').find('.prc').text();

		function accMul(arg1, arg2) {

	        var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

	        try { m += s1.split(".")[1].length } catch (e) { }

	        try { m += s2.split(".")[1].length } catch (e) { }

	        return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

		}

		//改变小计的价格
		$(this).parents('tr').find('.amount').text(accMul(num, pr));

		getTotals();
	})

	//减
	$('.minus').click(function(){
		var num = $(this).next().val().trim();
		num--;
		if(num <=1 ){
			num = 1;
		}
		$(this).next().val(num);
		//获取单价
		var pr = $(this).parents('tr').find('.prc').text();

		function accMul(arg1, arg2) {

	        var m = 0, s1 = arg1.toString(), s2 = arg2.toString();

	        try { m += s1.split(".")[1].length } catch (e) { }

	        try { m += s2.split(".")[1].length } catch (e) { }

	        return Number(s1.replace(".", "")) * Number(s2.replace(".", "")) / Math.pow(10, m)

		}

		 //改变小计的价格
		$(this).parents('tr').find('.amount').text(accMul(num, pr));

		getTotals();
	})

	//删除
	$('.remove').click(function(){

		var tishi = confirm('你确定删除吗??');

		if(!tishi) return;

		//获取当前商品的id
		var gid = $(this).parents('tr').find('.check').attr('gid');
		var rems = $(this);

		// 发送ajax
		$.post('/home/remcart',{'_token':"{{csrf_token()}}",gid:gid},function(data){

			// console.log(data);
			if (data == 1) {

				// alert(data.success);

				rems.parents('tr').remove();

				getTotals();

				var gids = $('.check').attr('gid');
				
			}

		})

	})
//清空购物车
		$('.qk').click(function(){
			var tishi = confirm('你确定清空购物车吗');
			var catbody = $('.catbody')[0];
			if(!tishi) return;
			$.post('/home/qk', {'_token':"{{csrf_token()}}", id:1}, function(data){
				if(data == 1){
					catbody.remove();
				}
			});
		})


	//封装
	function getTotals()
	{
		var totals = 0;
		$(':checkbox:checked').each(function(){
			
			var tos = parseFloat($(this).parents('tr').find('.amount').text());

			// console.log(typeof tos);

			totals += tos;
			
		})
		//让总计发生改变
		$('#total').text(totals+'元');
	}
</script>
@stop