@extends('layouts.admin')

@section('title', '编辑开源项目')

@section('css')
    <link href="{{ asset('statics/gentelella/vendors/iCheck/skins/square/blue.css') }}" rel="stylesheet">
@endsection

@section('nav', '编辑开源项目')

@section('description', '编辑新的开源项目')

@section('content')

    <!-- 导航栏结束 -->
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li>
            <a href="{{ url('admin/gitProject/index') }}">开源项目列表</a>
        </li>
        <li class="active">
            <a href="">编辑开源项目</a>
        </li>
    </ul>
    <form class="form-inline " action="{{ url('admin/gitProject/update', [$data->id]) }}" method="post">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>类型</th>
                <td>
                    <span class="inputword">github</span>
                    <input class="qjz-icheck" type="radio" name="type" value="1" @if($data->type == 1) checked @endif>
                    <span class="inputword">gitee</span>
                    <input class="qjz-icheck" type="radio" name="type" value="2" @if($data->type == 2) checked @endif>
                </td>
            </tr>
            <tr>
                <th>项目</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="name" value="{{ $data->name }}">
                </td>
            </tr>
            <tr>
                <th>排序</th>
                <td>
                    <input class="form-control modal-sm" type="text" name="sort" value="{{ $data->sort }}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input class="btn btn-success" type="submit" value="提交">
                </td>
            </tr>
        </table>
    </form>

@endsection

@section('js')
    <script src="{{ asset('statics/gentelella/vendors/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('.qjz-icheck').iCheck({
                checkboxClass: 'icheckbox_square-red',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
@endsection