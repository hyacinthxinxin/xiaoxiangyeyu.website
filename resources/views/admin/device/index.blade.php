@extends('admin.layout.main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-10 col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">设备列表</h3>
                    </div>
                    <a type="button" class="btn " href="/admin/devices/create">增加设备</a>
                    @include('admin.layout.error')
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>设备名称</th>
                                <th>操作</th>
                            </tr>
                            @foreach($devices as $device)
                                <tr>
                                    <td>{{$device->id}}.</td>
                                    <td>{{$device->name}}</td>
                                    <td>
                                        <a type="button" class="btn btn-info"
                                           href="/admin/devices/{{$device->id}}/edit">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">编辑</span>
                                        </a>
                                        <form action="{{ url('admin/devices/'.$device->id) }}" method="POST" style="display: inline;">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true">删除</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $devices->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection