@extends('app')

@section('title', '建立廠牌表單')

@section('HP_theme', '建立廠牌的表單')

@section('HP_contents')
    @include('message.list')
    {!! Form::open(['url' => 'brands/store']) !!}
    @include('brands.form', ['submitButtonText'=>"新增廠牌資料"])
    {!! Form::close() !!}
@endsection
