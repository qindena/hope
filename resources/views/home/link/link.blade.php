@extends('common.homes')
@section('title','友情链接')

@section('home')
<div class="content left" style="width:100%;min-height: 455px;">
<div class="subtitle-new">友情链接</div>
<div class="li-box">
<ul>
@foreach($rs as $k=>$v)
    <li><a href="{{$v->url}}" target="_blank"><img title="{{$v->fname}}" src="{{$v->profile}}" width="75 " height="31" border="0" alt=""></a></li>

@endforeach  
     
</ul>
</div>
<div class="container" >   
        <p style="float:right;margin-left:10px"> <a href="/home/link/list"><button class="btn btn-warning">查看链接状态</button></a></p> 
        <p style="float:right;"> <a href="/home/create"><button class="btn btn-warning">添加友情链接</button></a> </p>
       
</div>
</div>


<style>
.li-box{

	margin-top:20px; 
	margin-left:150px;
	
}
.li-box ul li{
	float:left;
	line-height:20px;
	margin-left:15px;
}
.subtitle-new {
    background: url(//static.hdslb.com/images/v2images/text_01.png) no-repeat 0 3px;
    display: block;
    padding: 0 0 0 16px;
    font-size: 15px;
    color: #555;
    font-weight: 700;
    font-family: "microsoft yahei",simhei;
    height: 30px;
    line-height: 24px;
    border-bottom: 4px solid #eee;
    clear: both;
    margin-left:150px;
    margin-right:140px;
}

div {
    display: block;
}
ul, li {
    margin: 0;
    padding: 0;
    list-style-type: none;
}
</style>
@stop