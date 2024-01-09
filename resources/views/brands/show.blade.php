
@extends('app')

@section('title', '列出指定耳機')

@section('HP_theme','你所選擇的耳機資料')

@section('HP_contents') 
<h1>顯示單一廠牌</h1>
品牌編號: {{ $brand->id }}<br/>
品牌名稱: {{ $brand->name }}<br/>
品牌國家: {{ $brand->country }}<br/>
建立日期: {{ $brand->since }}<br/>
品牌創辦人: {{ $brand->founder }}<br/>
品牌總部: {{ $brand->headquarters }}<br/>
品牌網站: {{ $brand->web }}<br/>

<h1>{{ $brand->name }}的所有耳機</h1>

<table>
    <tr>
        <th>編號</th>
        <th>耳機名稱</th>
        <th>種類</th>
        <th>頻率響應</th>
        <th>聲壓級</th>
        <th>抗阻</th>
        <th>重量</th>
        <th>傳輸</th>
        <th>價格</th>
        <th>操作</th>
    </tr>
    @foreach ($headphones as $headphone)
        <tr>
            <td>{{ $headphone->id }}</td>
            <td>{{ $headphone->name }}</td>
            <td>{{ $headphone->genre }}</td>
            <td>{{ $headphone->brand->name }}<br/>
            <td>{{ $headphone->hz }}</td>
            <td>{{ $headphone->spl }}</td>
            <td>{{ $headphone->oi }}</td>
            <td>{{ $headphone->weight }}</td>
            <td>{{ $headphone->ts }}</td>
            <td>{{ $headphone->price }}</td>
        </tr>
    @endforeach
<table>
@endsection