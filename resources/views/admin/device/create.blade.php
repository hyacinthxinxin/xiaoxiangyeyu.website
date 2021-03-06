@extends('admin.layout.main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-10 col-xs-12">
                <div class="box">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">增加设备</h3>
                        </div>
                        <form role="form" action="/admin/devices" method="POST">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">设备名称</label>
                                    <input type="text" class="form-control" name="name">
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