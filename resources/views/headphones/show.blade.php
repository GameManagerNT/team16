@extends('app')

@section('title', '耳機網站 - 列出所有耳機')
@section('HP_theme', '您所選的耳機品項')
@section('HP_contents')

<h1>顯示單一耳機</h1>
    編號:{{ $headphone->id}}<br/>
    廠商:{{ $headphone->brand->name}}<br/>
    型號:{{ $headphone->name}}<br/>
    類型:{{ $headphone->genre}}<br/>
    響應頻率(HZ):{{ $headphone->hz}}<br/>
    聲壓級(db/mW):{{ $headphone->spl}}<br/>
    抗阻(Ω):{{ $headphone->oi}}<br/>
    重量(g):{{ $headphone->weight}}<br/>
    傳輸:{{ $headphone->ts}}<br/>
    價格(NTD):{{ $headphone->price}}<br/>
@endsection