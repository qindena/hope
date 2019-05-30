@extends('common.homes')
@section('title','添加友情链接')

@section('home')
<link rel="stylesheet" type="text/css" href="/home/css/bootstrap.css" >
<hr>	
<div class="container" style="margin-top:35px;margin-bottom:40px">
<form style="width:400px" action="/home/store" method='post' enctype='multipart/form-data'>
  <div class="form-group">
    <label for="exampleInputEmail1" >链接名称</label>
    <input type="text" class="inp form-control" id="exampleInputEmail1" name="fname" placeholder="连接名称">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">链接地址</label>
    <input type="text" class="inp form-control" id="exampleInputPassword1" name="url" placeholder="地址">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">链接头像</label>
    <input type="file" id="exampleInputFile" name="profile" class="inp">
   
  </div>
  <div class="form-group" hidden>
    <label for="exampleInputFile">申请状态</label>
    <div class="checkbox">
    <label >
      <input type="radio" name='status' value='0' checked>申请中...
    </label>
  </div>
   
  </div>
  {{csrf_field()}}
  <button type="submit" class="btn btn-warning" style="margin-left:300px">申请链接</button>
</form>
</div>

<hr>


@stop


@section('js')
<style type="text/css">
.inp{
  margin-top:15px;
}
</style>
<script>
	
	

</script>
@stop