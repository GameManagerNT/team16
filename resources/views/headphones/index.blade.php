@extends('app')

@section('title', '耳機網站 - 列出所有耳機')

@section('HP_contents')

<h1>列出所有耳機</h1>
<table>
<tr>
    <th>編號(主鍵)</th>
    <th>廠商(外部鍵)</th>
    <th>型號</th>
    <th>類型</th>
    <th>響應頻率(HZ)</th>
    <th>聲壓級(db/mW)</th>
    <th>抗阻(Ω)</th>
    <th>重量(g)</th>
    <th>傳輸</th>
    <th>價格(NTD)</th>
    <th>操作1</th>
    <th>操作2</th>
    <th>操作3</th>

</tr>
@foreach($headphones as $headphone)
<tr>
    <td>{{ $headphone->id}}</td>
    <td>{{ $headphone->tid}}</td>
    <td>{{ $headphone->name}}</td>
    <td>{{ $headphone->genre}}</td>
    <td>{{ $headphone->hz}}</td>
    <td>{{ $headphone->spl}}</td>
    <td>{{ $headphone->oi}}</td>
    <td>{{ $headphone->weight}}</td>
    <td>{{ $headphone->ts}}</td>
    <td>{{ $headphone->price}}</td>
    <td><a href="{{ route('headphones.show',['id'=>$headphone->id]) }}">顯示</a></td>
    <td><a href="{{ route('headphones.edit',['id'=>$headphone->id]) }}">修改</a></td>
    <td>刪除</td>
   @endforeach
</table>
@endsection