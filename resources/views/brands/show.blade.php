
@extends('app')

@section('title', '列出指定耳機')

@section('HP_theme','你所選擇的球員資料')

@section('HP_contents') 
品牌編號: {{ $brand->id }}<br/>
品牌名稱: {{ $brand->name }}<br/>
品牌國家: {{ $brand->country }}<br/>
建立日期: {{ $brand->since }}<br/>
品牌創辦人: {{ $brand->founder }}<br/>
品牌總部: {{ $brand->headquarters }}<br/>
品牌網站: {{ $brand->web }}<br/>
@endsection
