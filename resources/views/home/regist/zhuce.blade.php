<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <meta name="author" content="order by dede58.com"/>
		<title>用户注册</title>
		<link rel="stylesheet" type="text/css" href="/home/css/login.css">
		<script src="/js/jquery-3.2.1.min.js"></script>
		<style type="text/css">
			*{margin:0px;padding:0px;}
			#all{width:570px;height:400px;margin:30px auto}
			table{width:570px;height:400px;border-collapse:collapse;}
			.into{text-align:right;padding-right:20px;width:130px;}
			input{width:160px;height:30px;border:solid 1px #333;margin-left:10px;}
			.cur{border:solid 1px blue;}
		</style>
	</head>
	<body>
		<form  method="post" action="/home/store" id='forms'>
		<div class="regist">
			<div class="regist_center">
				<div class="regist_top">
					<div class="left fl">会员注册</div>
					<div class="right fr"><a href="./index.html" target="_self">小米商城</a></div>
					<div class="clear"></div>
					<div class="xian center"></div>
				</div>
				<div class="regist_main center">
					<div class="username">用&nbsp;&nbsp;户&nbsp;&nbsp;名:&nbsp;&nbsp;<input class="shurukuang" type="text" name="username" placeholder="请输入你的用户名"/><span>请不要输入汉字</span></div>
					
					<div class="username">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;&nbsp;<input class="shurukuang" type="password" name="password" placeholder="请输入你的密码"/><span>请输入6位以上字符</span></div>
					
					<div class="username">确认密码:&nbsp;&nbsp;<input class="shurukuang" type="password" name="repassword" placeholder="请确认你的密码"/><span>两次密码要输入一致哦</span></div>
					<div class="username">手&nbsp;&nbsp;机&nbsp;&nbsp;号:&nbsp;&nbsp;<input class="shurukuang" type="text" name="phone" placeholder="请填写正确的手机号"/><span>填写下手机号吧，方便我们联系您！</span></div>
					<div class="username">
						<div class="left fl">验&nbsp;&nbsp;证&nbsp;&nbsp;码:&nbsp;&nbsp;<input class="yanzhengma" type="text" name="code" placeholder="请输入验证码"/><span></span>
						<button id='but' style='width:100px;height:30px;font-size:17px'>获取验证码</button>
					</div>
						<div class="right fl">
						<div class="clear"></div>
					</div>
				</div>
				{{csrf_field()}}
				<div class="regist_submit">
					<input class="submit" type="submit" value="立即注册" >
				</div>
				
			</div>
		</div>
		</form>
	</body>
</html>
<script type="text/javascript">
		var UV = false;
		var PV = false;
		var PHV = false;
		var CV = false;

	//用户名获取焦点
	$('input[name=username]').focus(function(){
		$(this).addClass('cur');
	})
	//失去焦点事件
	$('input[name=username]').blur(function(){
		//获取输入的值
		var tv = $(this).val();

		if(tv == ''){
			$(this).css('border','solid 1px red');
			$(this).next().text('* 用户名不能为空').css('color','red');
			return;
		}

		//正则验证
		var reg = /^\w{6,12}$/;
		var ts = $(this);
		if(!reg.test(tv)){
			//改变样式
			$(this).css('border','solid 1px red');
			$(this).next().text('* 用户名格式不正确').css('color','red');
			UV = false;
		} else {
			//发送ajax
			$.get('/home/checkuser',{tv:tv},function(data){
				if(data == 1){
					ts.css('border','solid 1px red');
					ts.next().text('* 用户名已存在').css('color','red');
					UV = false;
				} else {
					ts.css('border','solid 1px green');
					ts.next().text('* √').css('color','green');
					UV = true;
				}
			})
		}
	})

	//密码
	//获取焦点
	$('input[name=password]').focus(function(){
		$(this).addClass('cur');
	})

	//失去焦点
	$('input[name=password]').blur(function(){
		//获取值
		var pv = $(this).val().trim();

		if(pv == ''){

			$(this).css('border','solid 1px red');
			$(this).next().text('* 密码不能为空').css('color','red');

			return;

		}
		//正则
		var reg = /^\S{8,16}$/;

		if(!reg.test(pv)){
			$(this).css('border','solid 1px red');
			$(this).next().text('* 密码格式不正确').css('color','red');

			PV = false;

		} else {

			$(this).css('border','solid 1px green');
			$(this).next().text('* √').css('color','green');

			PV = true;
		}

	})

	//确认密码
	$('input[name=repassword]').focus(function(){

		$(this).addClass('cur');

	})

	//失去焦点
	$('input[name=repassword]').blur(function(){
		//获取确认密码的值
		var rpv = $(this).val().trim();

		if(rpv == ''){
			$(this).css('border','solid 1px red');
			$(this).next().text('* 密码不能为空').css('color','red');
			return;
		}
		//获取密码的值
		var pv = $('input[name=password]').val().trim();

		if(rpv != pv){

			$(this).css('border','solid 1px red');
			$(this).next().text('* 两次密码不正确').css('color','red');
		} else {

			$(this).css('border','solid 1px green');
			$(this).next().text('* √').css('color','green');
		}

	})

	//手机号
	//获取焦点
	$('input[name=phone]').focus(function(){

		$(this).addClass('cur');
	})

	//失去焦点
	$('input[name=phone]').blur(function(){
		//获取值
		var phv = $(this).val().trim();

		if(phv == ''){

			$(this).css('border','solid 1px red');
			$(this).next().text('* 手机号不能为空').css('color','red');
			return;
		}

		//正则
		var reg = /^1[3456789]\d{9}$/;

		if(!reg.test(phv)){

			$(this).css('border','solid 1px red');
			$(this).next().text('* 手机号格式不正确').css('color','red');

			PHV = false;
		} else {

			$(this).css('border','solid 1px green');
			$(this).next().text('* √').css('color','green');

			PHV = true;
		}
	})

	//手机号码接收验证码
	$('#but').click(function(){
		//获取手机号
		var number = $('input[name=phone]').val().trim();
		var but = $(this);
		//发送ajax
		$.post('/home/checkcode',{number:number,'_token':"{{csrf_token()}}"},function(data){
			var countdown = 60;
			function settime(obj) {
				if (countdown == 0) {
					obj.html("获取验证码");
					countdown = 60;
					return;
				} else {
					obj.html(countdown + "s");
					countdown--;
				}
				setTimeout(function () {
					settime(obj);
				}, 1000)		
			}
			settime(but);
		})
		return false;
	})

	//验证码
	$('input[name=code]').focus(function(){

		$(this).addClass('cur');
	})

	$('input[name=code]').blur(function(){

		//获取验证码
		var cv = $(this).val().trim();

		var cc = $(this);

		if(cv == ''){
			$(this).css('border','solid 1px red');
			$(this).next().text('* 验证码不能为空').css('color','red');

			return;

		}

		//发送ajax
		$.get('/home/checknum',{cv:cv},function(data){
			if(data == 0){
				cc.css('border','solid 1px red');
				cc.next().text('* 验证码不正确').css('color','red');

				CV = false;
			} else {

				cc.css('border','solid 1px green');
				cc.next().text('* √').css('color','green');

				CV = true;
			}
		})
	})

	//提交事件
	
	$('#forms').submit(function(){

		$('input[name=username]').trigger('blur');

		if(UV && PV && PHV && CV){

			return true;
		}

		return false;
	})
</script>