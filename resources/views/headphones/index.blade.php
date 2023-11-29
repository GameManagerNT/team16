@extends('app')

@section('title', 'HP網站 - 列出所有耳機')

@section('HP_contents')



    <title>列出所有耳機</title>



    <h1>列出所有耳機</h1>
    <table>
        <tr>
            <th>編號</th>
            <th>型號</th>
            <th>類型</th>
            <th>響應頻率</th>
            <th>聲壓級</th>
            <th>阻抗</th>
            <th>重量</th>
            <th>傳輸</th>
            <th>價格</th>
            <th>操作1</th>
            <th>操作2</th>
            <th>操作3</th>
        </tr>
        @for($i=0; $i<count($headphones); $i++)
        <tr>
            <td>{{ $headphones[$i]['id']}} </td>
            <td>{{ $headphones[$i]['name']}} </td>
            <td>{{ $headphones[$i]['genre']}} </td>
            <td>{{ $headphones[$i]['hz']}} </td>
            <td>{{ $headphones[$i]['spl']}} </td>
            <td>{{ $headphones[$i]['oi']}} </td>
            <td>{{ $headphones[$i]['weight']}} </td>
            <td>{{ $headphones[$i]['ts']}} </td>
            <td>{{ $headphones[$i]['price']}} </td>
            <td><a href="{{ route('headphones.show',['id'=>$headphones[$i]['id']]) }}">顯示</td>
            <td><a href="{{ route('headphones.edit',['id'=>$headphones[$i]['id']]) }}">修改</td>
            <td>刪除</td>
        </tr>

        @endfor
    <table>

@endsection
