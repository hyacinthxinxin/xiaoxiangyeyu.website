@extends('admin.layout.main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">设备列表</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>房间名称</th>
                                <th>设备名称</th>
                                <th>指令名称</th>
                                <th>指令类型</th>
                                <th>指令地址</th>
                                <th>指令值</th>
                                <th>操作</th>
                            </tr>
                            @foreach($controls as $control)
                                <tr>
                                    <td>{{$control->id}}.</td>
                                    <td>{{$control->room_name}}</td>
                                    <td>{{$control->device_name}}</td>
                                    <td>{{$control->command_name}}</td>
                                    <td>{{commandTypeDescription($control->command_type)}}</td>
                                    <td>{{$control->command_address}}</td>
                                    <td>{{$control->command_value}}</td>
                                    <td>
                                        <a type="button" class="btn btn-primary"
                                           href="/admin/dingdongs/{{$dingdong->id}}/controls/{{$control->id}}/edit">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">编辑</span>
                                        </a>
                                        <a type="button" class="btn btn-danger"
                                           href="/admin/dingdongs/{{$dingdong->id}}/controls/{{$control->id}}/delete">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true">删除</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $controls->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection