@extends('admin.layout.main')
@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">

                    <div class="box-header with-border">
                        <h3 class="box-title">项目列表</h3>
                    </div>
                    <a type="button" class="btn " href="/admin/dingdongs/create">增加项目</a>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>项目名称</th>
                                <th>音箱序号</th>
                                <th>项目地址</th>
                                <th>操作</th>
                            </tr>
                            @foreach($dingdongs as $dingdong)
                                <tr>
                                    <td>{{$dingdong->id}}.</td>
                                    <td>{{$dingdong->name}}</td>
                                    <td>{{$dingdong->dingdong_user_id}}</td>
                                    <td>{{$dingdong->address}}</td>
                                    <td>
                                    <a type="button" class="btn" href="/admin/dingdongs/{{$dingdong->id}}">查看</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $dingdongs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection