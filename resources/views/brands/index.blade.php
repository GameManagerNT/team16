<html>

<head>
    <title>列出所有廠牌</title>
</head>

<body>
    <h1>列出所有廠牌</h1>

    <table>
        <tr>
            <th>編號</th>
            <th>廠牌</th>
            <th>國家</th>
            <th>成立日期</th>
            <th>創辦人</th>
            <th>總部</th>
            <th>網站</th>
            <th>操作1</th>
            <th>操作2</th>
            <th>操作3</th>
        </tr>

        @for($i=0; $i<count($brands); $i++)
        <tr>  
            <td>{{$brands[$i]['id']}}</td>
            <td>{{ $brands[$i]['name']}} </td>
            <td>{{ $brands[$i]['country']}} </td>
            <td>{{ $brands[$i]['since']}} </td>
            <td>{{ $brands[$i]['founder']}} </td>
            <td>{{ $brands[$i]['headquarters']}} </td>
            <td>{{ $brands[$i]['web']}} </td>
            <td><a href="{{ route('brands.show',['id'=>$brands[$i]['id']]) }}">顯示</td>
            <td><a href="{{ route('brands.edit',['id'=>$brands[$i]['id']]) }}">修改</td>
            <td>刪除</td>
        </tr>
        @endfor
    <table>

</body>
</html>