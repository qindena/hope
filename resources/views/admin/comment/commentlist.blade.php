@extends('common.admins')

@section('title', '评论浏览')

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
           {{$title}}
        </span>
    </div>
    @if(session('success'))
    <div class="mws-form-message info">
        {{session('success')}}
    </div>
    @endif
    @if (count($errors) > 0)
        <div class="mws-form-message error">
            <ul>
                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
        <form action="/admin/goods" method="get">
                <div id="DataTables_Table_1_length" class="dataTables_length">
                    <label>
                        Show
                        <select size="1" name="num" aria-controls="DataTables_Table_1">
                            <option value="10" @if($request->num == 10)selected="selected" @endif>
                                10
                            </option>
                            <option value="20" @if($request->num == 20)selected="selected" @endif>
                                20
                            </option>
                            <option value="30" @if($request->num == 30)selected="selected" @endif>
                                30
                            </option>
                        </select>
                        entries
                    </label>
                </div>
                <div class="dataTables_filter" id="DataTables_Table_1_filter">
                    <label>
                        Search:
                        <input type="text" name="search" aria-controls="DataTables_Table_1" value="{{$request->search}}">
                        <button class="btn">搜索</button>
                    </label>
                </div>
            </form>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 20px;">
                            ID
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 50px;">
                            用户名
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                        style="width: 100px;">
                            评论内容
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                        style="width: 100px;">
                            评价等级
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 87px;">
                            商品id
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 100px;">
                            评论时间
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 87px;">
                            评论图片
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 100px;">
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
					@foreach($rs as $k=>$v)
                    @if($k%2 == 0)
                    <tr class="odd" align="center">
                    @else
					<tr class="even" align="center">
                    @endif	
                        <td class="  sorting_1">
                           {{$v->id}}
                        </td>
                        <td class=" ">
                           {{$v->uname}}
                        </td>
                        <td class=" ">
                           {{$v->content}}
                        </td>
                        <td class=" ">
                           {{$v->star}}
                        </td>
                        <td class=" ">
                           {{$v->gid}}
                        </td>
                        <td class=" ">
                           {{date('Y-m-d H:i:s', $v->addtime)}}
                        </td>
                        @php
                        $gpics = explode(',', $v->url);
                        @endphp
                        <td class=" ">
                        @foreach($gpics as $val)
                            <img src="{{$val}}" width="40px" alt="">
                        @endforeach
                        </td>
                        <td class=" ">
                        	<!-- <a href="" class="btn">查看商品详情</a>
                            <a href="" class="btn">修改</a>
                            <a href="" class="btn">删除</a> -->

                            <span class="btn-group">
                                <form class="btn btn-small" action="/admins/comment/{{$v->id}}" method="post">
									{{ method_field('DELETE') }}
									{{csrf_field()}}
									<button class="icon-trash"></button>
                                </form>
                            </span>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <style>
                .pagination{

                    margin:0px;
                }

                .pagination li{
                        float: left;
                        height: 20px;
                        padding: 0 10px;
                        display: block;
                        font-size: 12px;
                        line-height: 20px;
                        text-align: center;
                        cursor: pointer;
                        outline: none;
                        background-color: #444444;
                       
                        text-decoration: none;
                        border-right: 1px solid rgba(0, 0, 0, 0.5);
                        border-left: 1px solid rgba(255, 255, 255, 0.15);
                        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
                }

                .pagination a{
                     color: #fff;
                }

                .pagination .active{
                    
                    color: #323232;
                    border: none;
                    background-image: none;
                    box-shadow: inset 0px 0px 4px rgba(0, 0, 0, 0.25);
                    background-color: #f08dcc;
                }

            </style>
            <div class="dataTables_info" id="DataTables_Table_1_info">
                 显示 {{$rs->firstItem()}} to {{$rs->lastItem()}} of {{$rs->count()}} 条数据  总共是{{$rs->total()}}条数据
            </div>
            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                {{$rs->appends($request->all())->links()}}
                
            </div>

        </div>
    </div>
</div>
@stop
@section('js')
<script>
$('.gname').dblclick(function(){
    var tx = $(this).text().trim();
    var inp = $('<input type="text">');
    $(this).empty();
    $(this).append(inp);
    var $td = $(this);
    inp.val(tx);
    inp.select();
    inp.blur(function(){
        // 获取新值
        var $ux = $(this).val().trim();
        var $uid = $(this).parents('tr').find('td').eq(0).text().trim();
        // console.log($uid);
        $.get('/admin/goods/ajaxgs',{'gname':$ux,'uid':$uid},function(data){
            if(data.code == 1){
                $td.text($ux);
            } else {
                $td.text(tx);
            }
        });
    });
});
setTimeout(function(){
    $('.mws-form-message').slideUp(2000);
},3000);
</script>
@stop