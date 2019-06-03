@extends('common/homes')
<link href='/css/jd-reg.css' type='text/css' rel='stylesheet' >    
@section('home')

	<div class="container w">

    <div class="main clearfix">
        <div class="reg-form fl">
            <form action="/home/docity" id="" method="post" novalidate="novalidate" style="width:500px;">
            	{{csrf_field()}}
                <div class="form-item form-item-account" id="form-item-account" style="z-index:1">
                    <label>收　货　人</label>
                   <input type="text" id="form-account" style="" name="oname" class="field" autocomplete="off" maxlength="20" placeholder="收货人姓名" default="&lt;i class=&quot;i-def&quot;&gt;&lt;/i&gt;支持中文、字母、数字、“-”“_”的组合，4-20个字符">
                    <i class="i-status"></i>
                </div>
                <div class="input-tip">
                    <span></span>
                </div>
                <div class="form-item">
                    <label>联 系 电 话</label>
                    
                    <input type="text" name="phone" id="form-pwd" class="field" maxlength="20" placeholder="联系电话" >
                    <i class="i-status"></i>
                <div class="capslock-tip tips">大写已开启<b class="arrow"></b><b class="arrow-inner"></b></div><div class="capslock-tip tips">大写已开启<b class="arrow"></b><b class="arrow-inner"></b></div></div>
                <div class="input-tip">
                    <span></span>
                </div>
                <div class="form-item" style="width:500px;">
                    <label>收 货 地 址</label>
                    
                  <input type="text" name="address"   id="form-equalTopwd" class="field" placeholder="收货的具体地址" maxlength="120" default="&lt;i class=&quot;i-def&quot;&gt;&lt;/i&gt;请再次输入密码">
                    <i class="i-status"></i>
              
                </div>
              
                              
                                 
                  
                    
                
                <div class="form-agreen">
                    <div></div>
                    <div class="input-tip">
                        <span></span>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn-register">提交信息</button>
                </div>
            </form>
        </div>
       
    </div>
  
</div>
@stop