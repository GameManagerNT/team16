@extends('app')

@section('title', '耳機網站 - 列出所有廠牌')

@section('HP_contents')

<h1>顯示單一廠牌</h1>

<table  >
<tr>
   編號:{{ $brand->id}}<br/>
   品牌名稱:{{ $brand->name}}<br/>
   國家:{{ $brand->country}}<br/>
   成立日期:{{ $brand->since}}<br/>
   創辦人:{{ $brand->founder}}<br/>
   總部:{{ $brand->headquarters}}<br/>
   網站:{{ $brand->web}}<br/>


   
   <h1>列出{{ $brand->name}}的所有耳機</h1>
<table class = "table table-hover" >
    <tr>
        <th style="border: 1px solid black;">編號</th>
        <th style="border: 1px solid black;">廠商</th>
        <th style="border: 1px solid black;">型號</th>
        <th style="border: 1px solid black;">類型</th>
        <th style="border: 1px solid black;">響應頻率(HZ)</th>
        <th style="border: 1px solid black;">聲壓級(db/mW)</th>
        <th style="border: 1px solid black;">抗阻(Ω)</th>
        <th style="border: 1px solid black;">重量(g)</th>
        <th style="border: 1px solid black;">傳輸</th>
        <th style="border: 1px solid black;">價格(NTD)</th>

    </tr>
    @foreach($headphones as $headphone)
    <tr>
        <td style="border: 1px solid black;">{{ $headphone->id}}</td>
        <td style="border: 1px solid black;">{{ $headphone->brand->name}}</td>
        <td style="border: 1px solid black;">{{ $headphone->name}}</td>
        <td style="border: 1px solid black;">{{ $headphone->genre}}</td>
        <td style="border: 1px solid black;">{{ $headphone->hz}}</td>
        <td style="border: 1px solid black;">{{ $headphone->spl}}</td>
        <td style="border: 1px solid black;">{{ $headphone->oi}}</td>
        <td style="border: 1px solid black;">{{ $headphone->weight}}</td>
        <td style="border: 1px solid black;">{{ $headphone->ts}}</td>
        <td style="border: 1px solid black;">{{ $headphone->price}}</td>
    @endforeach
</table>

@endsection