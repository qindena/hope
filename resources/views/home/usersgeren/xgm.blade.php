<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="order by dede58.com"/>
        <title>修改密码</title>
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
        <form  method="post" action="/home/xgcg" id='forms'>
        <div class="regist">
            <div class="regist_center">
                <div class="regist_top">
                    <div class="left fl">修改密码</div>
                    <div class="right fr"><a href="/" target="_self">小米商城</a></div>
                    <div class="clear"></div>
                    <div class="xian center"></div>
                </div>
                <div class="regist_main center">
                    <div class="username">原&nbsp;&nbsp;密&nbsp;&nbsp;码:&nbsp;&nbsp;<input class="shurukuang" type="password" name="pword" placeholder="请输入你的原密码"/><span>请输入6位以上字符</span></div>
                    
                    <div class="username">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;&nbsp;<input class="shurukuang" type="password" name="password" placeholder="请输入你的密码"/><span>请输入6位以上字符</span></div>
                    
                    <div class="username">确认密码:&nbsp;&nbsp;<input class="shurukuang" type="password" name="repassword" placeholder="请确认你的密码"/><span>两次密码要输入一致哦</span></div>
                        <div class="right fl">
                        <div class="clear"></div>
                    </div>
                </div>
                {{csrf_field()}}
                <div class="regist_submit">
                    <input class="submit" type="submit" value="立即修改" >
                </div>
                
            </div>
        </div>
        </form>
    </body>
</html>
<script type="text/javascript">
        var UV = false;
        var PV = false;

    //原密码获取焦点
    $('input[name=pword]').focus(function(){
        $(this).addClass('cur');
    })
    //失去焦点事件
    $('input[name=pword]').blur(function(){
        //获取输入的值
        var tv = $(this).val();

        if(tv == ''){
            $(this).css('border','solid 1px red');
            $(this).next().text('* 原密码不能为空').css('color','red');
            return;
        }

        //正则验证
        var reg = /^\S{8,16}$/;
        var ts = $(this);
        if(!reg.test(tv)){
            //改变样式
            $(this).css('border','solid 1px red');
            $(this).next().text('* 原密码格式不正确').css('color','red');
            UV = false;
        } else {
            //发送ajax
            $.get('/home/ajaxxg',{tv:tv},function(data){
                if(data == 1){
                    ts.css('border','solid 1px green');
                    ts.next().text('* √').css('color','green');
                    UV = true;
                } else {
                    ts.css('border','solid 1px red');
                    ts.next().text('* 原密码错误').css('color','red');
                    UV = false;
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

    //提交事件
    
    $('#forms').submit(function(){

        $('input[name=pword]').trigger('blur');

        if(UV && PV){

            return true;
        }

        return false;
    })
</script>