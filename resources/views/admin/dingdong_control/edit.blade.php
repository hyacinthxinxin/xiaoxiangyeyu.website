@extends('admin.layout.main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-10 col-xs-12">
                <div class="box">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">编辑控制</h3>
                        </div>
                        <form role="form" action="/admin/dingdongs/{{$dingdong->id}}/controls/{{$control->id}}" method="POST">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="box-body">
                                <div class="form-group">
                                    <label>房间</label>
                                    <select name="room_id" class="form-control">
                                        @foreach($rooms as $room)
                                            <option value="{{ $room->id }}" @if($room->name==$control->room_name) selected @endif>{{ $room->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>设备</label>
                                    <select name="device_id" class="form-control">
                                        @foreach($devices as $device)
                                            <option value="{{ $device->id }}" @if($device->name==$control->device_name) selected @endif>{{ $device->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label>指令</label>
                                    <select name="command_id" class="form-control">
                                        @foreach($commands as $command)
                                            <option value="{{ $command->id }}" @if($command->name==$control->command_name) selected @endif>{{ $command->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">控制地址</label>
                                    <input type="text" class="form-control" name="command_address" value="{{ $control->command_address }}">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">控制值</label>
                                    <input type="number" class="form-control" name="command_value" value="{{ $control->command_value }}">
                                </div>
                            </div>
                            @include('layout.error')
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">保存</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection