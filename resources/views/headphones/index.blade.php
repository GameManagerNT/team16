@extends('app')

@section('title', 'HP網站 - 列出所有耳機')

@section('HP_theme', '所有耳機')

@section('HP_contents')
<h1>列出所有耳機</h1>

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
            <td>{{ $headphone->hz }}</td>
            <td>{{ $headphone->spl }}</td>
            <td>{{ $headphone->oi }}</td>
            <td>{{ $headphone->weight }}</td>
            <td>{{ $headphone->ts }}</td>
            <td>{{ $headphone->price }}</td>
            <td><a href="{{ route('headphones.show', ['id'=>$headphone->id]) }}">顯示</a></td>
            <td><a href="{{ route('headphones.edit', ['id'=>$headphone->id]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endforeach
<table>
@endsection