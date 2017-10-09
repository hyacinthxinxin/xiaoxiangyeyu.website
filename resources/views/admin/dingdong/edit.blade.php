@extends('admin.layout.main')
@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-12">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">编辑项目</h3>
                        </div>
                        <form role="form" action="/admin/dingdongs/{{ $dingdong->id }}" method="POST">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">项目名称</label>
                                    <input type="text" class="form-control" name="name" value="{{ $dingdong->name }}">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">音箱用户id</label>
                                    <input type="text" class="form-control" name="dingdong_user_id" value="{{ $dingdong->dingdong_user_id }}">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">项目地址</label>
                                    <input type="text" class="form-control" name="address" value="{{ $dingdong->address }}">
                                </div>
                            </div>
                            @include('layout.error')
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection