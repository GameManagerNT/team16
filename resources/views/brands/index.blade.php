<html>

<head>
    <title>列出所有廠牌</title>
</head>

<body>
<h1>列出所有廠牌</h1>
@for($i=0;$i<count($brands);$i++)
    {{ $brands[$i]['name']}}<br/>
    {{ $brands[$i]['country']}}<br/>
    {{ $brands[$i]['founder']}}<br/>
    {{ $brands[$i]['headquarters']}}<br/>
    {{ $brands[$i]['web']}}<br/><br/>

@endfor

</body>
</html>
