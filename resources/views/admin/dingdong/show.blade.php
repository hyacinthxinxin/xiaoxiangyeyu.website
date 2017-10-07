@extends('admin.layout.main')
@section('content')
    {{ $dingdong->name }}
    {{ $dingdong->dingdong_user_id }}
    {{ $dingdong->address }}
@endsection