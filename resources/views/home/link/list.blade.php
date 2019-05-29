@extends('common.homes')
@section('title','审核友情链接')

@section('home')
<div class="container">
<div class="bs-example" data-example-id="striped-table">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>序号</th>
          <th>连接名称</th>
          <th>链接地址</th>
          <th>连接图片</th>
          <th>状态</th>
        </tr>
      </thead>
      <tbody>
@foreach($rs as $k=>$v)
        <tr>
          <th scope="row">{{$v->id}}</th>
          <td>{{$v->fname}}</td>
          <td>{{$v->url}}</td>
          <td><img src="{{$v->profile}}" style="width:60px; height:35px" ></td>
          <td>
			@if($v->status==0)
          		审核中...

          	@endif


          </td>

        </tr>
@endforeach
       
      </tbody>
    </table>
  </div>
</div>
<div class="container" >
<a href="/home/link"><button class="btn btn-warning">返回友情链接</button></a>
</div>

@stop