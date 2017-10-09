@extends('admin.layout.main')
@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-12">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">指令列表</h3>
                    </div>
                    <a type="button" class="btn " href="/admin/commands/create">增加指令</a>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>指令名称</th>
                                <th>指令类型</th>
                                <th>操作</th>
                            </tr>
                            @foreach($commands as $command)
                                <tr>
                                    <td>{{$command->id}}.</td>
                                    <td>{{$command->name}}</td>
                                    <td>{{$command->type}}</td>
                                    <td>
                                    {{--<a type="button" class="btn"--}}
                                    {{--href="/admin/roles/{{$role->id}}/permission">权限管理</a>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $commands->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection