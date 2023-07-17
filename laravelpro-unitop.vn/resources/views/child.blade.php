@extends('layouts.app')

@section('title', 'Tiêu đề trang con')

@section('content')
    <p>Nội dung trang con</p>
    {{-- @if ($data % 2 == 0)
        <p>{{ $data }} là số chẵn</p>
    @else
        <p>{{ $data }} là số lẻ</p>
    @endif --}}

    @include('inc.comment', ['data' => 'User comment'])
@endsection

@section('sidebar')
    @parent
    <p>Tiêu đề trang con </p>
@endsection
