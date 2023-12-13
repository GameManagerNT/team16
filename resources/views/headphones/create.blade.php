@extends('app')

@section('title', '建立耳機表單')

@section('HP_theme', '建立耳機的表單')

@section('HP_contents')
    {!! Form::open(['url' => 'headphones/store']) !!}
    @include('headphones.form', ['submitButtonText'=>"新增耳機資料"])
    {!! Form::close() !!}
@endsection
    