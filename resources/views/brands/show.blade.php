@extends('app')

@section('title', '耳機網站 - 列出所有廠牌')

@section('HP_contents')

<h1>列出所有廠牌</h1>

<table>
<tr>
   編號:{{ $brand->id}}<br/>
   品牌名稱:{{ $brand->name}}<br/>
   國家:{{ $brand->country}}<br/>
   成立日期:{{ $brand->since}}<br/>
   創辦人:{{ $brand->founder}}<br/>
   總部:{{ $brand->headquarters}}<br/>
   網站:{{ $brand->web}}<br/>
</tr>

@endsection