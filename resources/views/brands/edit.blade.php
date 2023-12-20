@extends('app')

@section('title', 'HP網站 - 列出所有廠牌')

@section('HP_contents')

@section('HP_contents')
@include('message.list')
{!! Form::model($brand, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\BrandsController@update', $brand->id]]) !!}
@include('brands.form', ['submitButtonText'=>"更新廠牌資料"])
{!! Form::close() !!}
@endsection