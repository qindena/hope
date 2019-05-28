@extends('home/regist/login')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
    .ond{background: white;}
</style>
@section('home')
    <!-- 代码 begin -->
    <div style="text-align: center; width: 500px; margin: 100px auto;">

        {{$message}},将在
        <span class="loginTime" style="color: red">{{$jumpTime}}</span>
        秒后跳转至
        <a href="{{$url}}" style="color: red">{{$urlname}}</a>
        页面
    </div>
@stop

@section('js')
    <script type="text/javascript">
        $(function(){
            var url = "{{$url}}"
            var loginTime = parseInt($('.loginTime').text());
            var time = setInterval(function(){
                loginTime = loginTime-1;
                $('.loginTime').text(loginTime);
                if(loginTime==0){
                    clearInterval(time);
                    window.location.href=url;
                }
            },1000);
        })
    </script>
@stop