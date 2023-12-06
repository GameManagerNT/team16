
@extends('app')

@section('title', '列出指定耳機')

@section('HP_theme','你所選擇的球員資料')

@section('HP_contents') 
<h1>顯示單一耳機</h1>
耳機編號: {{ $headphone->id }}<br/>
耳機名稱: {{ $headphone->name }}<br/>
所屬廠牌: {{ $headphone->brand->name }}<br/>
耳機種類: {{ $headphone->genre }}<br/>
耳機頻響: {{ $headphone->hz }}<br/>
耳機聲壓級: {{ $headphone->spl }}<br/>
耳機抗阻: {{ $headphone->oi }}<br/>
耳機重量: {{ $headphone->weight }}<br/>
耳機傳輸: {{ $headphone->ts}}<br/>
耳機價格: {{ $headphone->price}}<br/>
@endsection