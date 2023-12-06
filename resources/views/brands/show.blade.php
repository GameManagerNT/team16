@extends('app')

@section('title', '耳機網站 - 列出所有廠牌')

@section('HP_contents')

<h1>顯示單一廠牌</h1>

<table>
<tr>
   編號:{{ $brand->id}}<br/>
   品牌名稱:{{ $brand->name}}<br/>
   國家:{{ $brand->country}}<br/>
   成立日期:{{ $brand->since}}<br/>
   創辦人:{{ $brand->founder}}<br/>
   總部:{{ $brand->headquarters}}<br/>
   網站:{{ $brand->web}}<br/>

   
   <h1>列出{{ $brand->name}}的所有耳機</h1>
<table>
<tr>
    <th>編號</th>
    <th>廠商</th>
    <th>型號</th>
    <th>類型</th>
    <th>響應頻率(HZ)</th>
    <th>聲壓級(db/mW)</th>
    <th>抗阻(Ω)</th>
    <th>重量(g)</th>
    <th>傳輸</th>
    <th>價格(NTD)</th>

</tr>
@foreach($headphones as $headphone)
<tr>
    <td>{{ $headphone->id}}</td>
    <td>{{ $headphone->brand->name}}</td>
    <td>{{ $headphone->name}}</td>
    <td>{{ $headphone->genre}}</td>
    <td>{{ $headphone->hz}}</td>
    <td>{{ $headphone->spl}}</td>
    <td>{{ $headphone->oi}}</td>
    <td>{{ $headphone->weight}}</td>
    <td>{{ $headphone->ts}}</td>
    <td>{{ $headphone->price}}</td>
   @endforeach
</table>

@endsection