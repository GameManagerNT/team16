@extends('app')

@section('title', '編輯特定耳機')

@section('HP_theme', '編輯中的耳機')

@section('HP_contents')
@include('message.list')
{!! Form::model($headphone, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\HeadphonesController@update', $headphone->id]]) !!}
 @include('headphones.form', ['submitButtonText'=>"更新耳機資料"])
{!! Form::close() !!}
@endsection