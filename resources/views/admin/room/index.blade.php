@extends('admin.layout.main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">房间列表</h3>
                    </div>
                    <a type="button" class="btn " href="/admin/rooms/create">增加房间</a>
                    @include('admin.layout.error')
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>房间名称</th>
                                <th>操作</th>
                            </tr>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>{{$room->id}}.</td>
                                    <td>{{$room->name}}</td>
                                    <td>
                                        <a type="button" class="btn btn-info"
                                           href="/admin/rooms/{{$room->id}}/edit">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">编辑</span>
                                        </a>
                                        <form action="{{ url('admin/rooms/'.$room->id) }}" method="POST" style="display: inline;">
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
                        {{ $rooms->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection