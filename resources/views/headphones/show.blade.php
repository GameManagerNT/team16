@extends('app')

@section('title', 'HP網站 - 列出所有耳機')

@section('HP_contents')

編號:{{ $headphone->id}}<br/>
廠商:{{ $headphone->brand->name}}<br/>
型號:{{ $headphone->name}}<br/>
類型:{{ $headphone->genre}}<br/>
響應頻率:{{ $headphone->hz}}<br/>
聲壓級:{{ $headphone->spl}}<br/>
阻抗:{{ $headphone->oi}}<br/>
重量:{{ $headphone->weight}}<br/>
傳輸:{{ $headphone->ts}}<br/>
價格:{{ $headphone->price}}<br/>

@endsection

