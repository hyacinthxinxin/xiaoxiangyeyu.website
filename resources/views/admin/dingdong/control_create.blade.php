@extends('admin.layout.main')
@section('content')
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-10 col-xs-6">
                <div class="box">

                    <!-- /.box-header -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">添加设备</h3>
                        </div>
                        <form role="form" action="/admin/dingdongs/{{$dingdong->id}}/controls" method="POST">
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>房间</label>
                                    <select name="room_id" class="form-control">
                                        @foreach($rooms as $room)
                                            <option value="{{ $room->id }}">{{ $room->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>设备</label>
                                    <select name="device_id" class="form-control">
                                        @foreach($devices as $device)
                                            <option value="{{ $device->id }}">{{ $device->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>指令</label>
                                    <select name="command_id" class="form-control">
                                        @foreach($commands as $command)
                                            <option value="{{ $command->id }}">{{ $command->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">控制地址</label>
                                    <input type="text" class="form-control" name="command_address">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">控制值</label>
                                    <input type="number" class="form-control" name="command_value">
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