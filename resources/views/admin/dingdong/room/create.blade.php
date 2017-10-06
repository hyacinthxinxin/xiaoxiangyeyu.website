@extends('admin.dingdong.layout.main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">增加房间</h3>
                        </div>
                        <form role="form" action="/admin/dingdongs/{{ $dingdong->id }}/rooms" method="POST">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">房间名称</label>
                                    <select name="name" id="" class="form-control">
                                        @foreach($admin_rooms as $admin_room)
                                            <option value="{{ $admin_room->description }}">{{ $admin_room->description }}</option>
                                        @endforeach
                                    </select>
                                    {{--<input type="text" class="form-control" name="name">--}}
                                </div>
                            </div>
                            @include('admin.dingdong.layout.error')
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