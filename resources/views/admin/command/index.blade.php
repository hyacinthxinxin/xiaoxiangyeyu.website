@extends('admin.layout.main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-10 col-xs-12">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">指令列表</h3>
                    </div>
                    <a type="button" class="btn " href="/admin/commands/create">增加指令</a>
                    @include('admin.layout.error')
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
                                    <td>{{commandTypeDescription($command->type) }}</td>
                                    <td>
                                        <a type="button" class="btn btn-info"
                                           href="/admin/commands/{{$command->id}}/edit">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">编辑</span>
                                        </a>
                                        <form action="{{ url('admin/commands/'.$command->id) }}" method="POST" style="display: inline;">
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
                        {{ $commands->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection