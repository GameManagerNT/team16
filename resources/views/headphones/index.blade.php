<html>

<head>
    <title>列出所有耳機</title>
</head>
<body>
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
@for($i=0; $i<count($headphones);$i++)
<tr>
    <td>{{ $headphones[$i]['id']}}<br/>
    <td>{{ $headphones[$i]['tid']}}<br/>
    <td>{{ $headphones[$i]['name']}}<br/>
    <td>{{ $headphones[$i]['genre']}}<br/>
    <td>{{ $headphones[$i]['hz']}}<br/>
    <td>{{ $headphones[$i]['spl']}}<br/>
    <td>{{ $headphones[$i]['oi']}}<br/>
    <td> {{ $headphones[$i]['weight']}}<br/>
    <td>{{ $headphones[$i]['ts']}}<br/>
    <td>{{ $headphones[$i]['price']}}<br/>
    <td><a href="{{ route('headphones.show',['id'=>$headphones[$i]['id']]) }}">顯示</a></td>
    <td><a href="{{ route('brands.edit',['id'=>$headphones[$i]['id']]) }}">修改</a></td>
    <td>刪除</td>
   @endfor
</table>
</body>
</html>