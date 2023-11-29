<html>

<head>
    <title>列出所有耳機</title>
</head>

<body>
<h1>列出所有耳機</h1>
<table>
    <tr>
        <th>編號</th>
        <th>品牌名稱</th>
        <th>國家</th>
        <th>成立日期</th>
        <th>創辦人</th>
        <th>總部</th>
        <th>網站</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @for($i=0; $i<count($headphones); $i++)
        <tr>
            <td>{{ $headphones[$i]['id'] }}</td>
            <td>{{ $headphones[$i]['name'] }}</td>
            <td>{{ $headphones[$i]['genre'] }}</td>
            <td>{{ $headphones[$i]['hz'] }}</td>
            <td>{{ $headphones[$i]['spl'] }}</td>
            <td>{{ $headphones[$i]['oi'] }}</td>
            <td>{{ $headphones[$i]['weight'] }}</td>
            <td>{{ $headphones[$i]['ts'] }}</td>
            <td>{{ $headphones[$i]['price'] }}</td>
            <td><a href="{{ route('headphones.show', ['id'=>$headphones[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('headphones.edit', ['id'=>$headphones[$i]['id']]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endfor
</table>

</body>
</html>
