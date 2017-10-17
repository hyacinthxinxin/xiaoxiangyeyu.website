@extends('admin.layout.main')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-10 col-xs-12">
                <div class="box">
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
                                    <input disabled type="text" class="form-control" name="name"
                                           value="{{ $dingdong->name }}">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">音箱用户id</label>
                                    <input disabled type="text" class="form-control" name="dingdong_user_id"
                                           value="{{ $dingdong->dingdong_user_id }}">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">项目地址</label>
                                    <input disabled type="text" class="form-control" data-inputmask="'alias': 'ip'"
                                           data-mask
                                           name="address" value="{{ $dingdong->address }}">
                                </div>
                            </div>
                            @include('admin.layout.error')
                            <div class="box-footer">
                                <button id="edit" type="button" class="btn btn-info">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true">编辑</span>
                                </button>

                                <button id="cancel" type="button" class="btn btn-default hidden">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true">取消</span>
                                </button>
                                <button id="save" type="submit" class="btn btn-success hidden">
                                    <span class="glyphicon glyphicon-ok" aria-hidden="true">保存</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <!-- InputMask -->
    <script src="{{ asset('/assets/admin/js/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset('/assets/admin/js/jquery.inputmask.extensions.js') }}"></script>
    <script>
        $(function () {
            $('[data-mask]').inputmask();
            $('#edit, #cancel').click(function () {
                $('.form-control, #edit').prop('disabled', function (_, val) {
                    return !val;
                });
                $('#edit, #cancel, #save').toggleClass('hidden');
            });
        })
    </script>
@endsection