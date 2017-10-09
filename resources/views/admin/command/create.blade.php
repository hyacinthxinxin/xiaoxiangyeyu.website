@extends('admin.layout.main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-10 col-xs-12">
                <div class="box">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">增加指令</h3>
                        </div>
                        <form role="form" action="/admin/commands" method="POST">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">指令名称</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">指令类型</label>
                                    <select name="type" id="" class="form-control">
                                        @foreach(Config::get('constants.command_types') as $command_type)
                                            <option value="{{ $command_type['value'] }}">{{ $command_type['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @include('admin.layout.error')
                            <div class="box-footer">
                                <button type="submit" class="btn btn-success">保存</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection