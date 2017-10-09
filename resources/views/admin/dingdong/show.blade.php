@extends('admin.layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-10 col-xs-12">
            <div class="box">
                <ul>
                    <li>项目名称：{{ $dingdong->name }}</li>
                    <li>项目音箱地址：{{ $dingdong->dingdong_user_id }}</li>
                    <li>项目地址：{{ $dingdong->address }}</li>
                    <li>
                        <a style="margin: auto" href="/admin/dingdongs/{{ $dingdong->id }}/edit">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">编辑</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection