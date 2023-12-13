@extends('app')

@section('title', '編輯特定耳機')

@section('HP_theme', '編輯中的耳機')

@section('HP_contents')
    {!! Form::model($headphone, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\headphonesController@update', $headphone->id]]) !!}
    @include('headphones.form', ['submitButtonText'=>"更新耳機資料"])
    {!! Form::close() !!}
@endsection
