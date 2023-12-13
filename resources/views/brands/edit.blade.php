@extends('app')

@section('title', '編輯特定廠牌')

@section('brand_theme', '編輯中的廠牌')

@section('HP_contents')

    {!! Form::model($brand, ['method' => 'PATCH', 'action' => ['\App\Http\Controllers\BrandsController@update', $brand->id]]) !!}

    @include('brands.form', ['submitButtonText' => "更新廠牌資料"])

    {!! Form::close() !!}

@endsection
