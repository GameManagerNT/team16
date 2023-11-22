<html>

<head>
    <title>列出所有耳機</title>
</head>
<body>
<h1>列出所有耳機</h1>

@for($i=0; $i<count($headphones);$i++)
   {{ $headphones[$i]['name']}}<br/>
   {{ $headphones[$i]['genre']}}<br/>
   {{ $headphones[$i]['hz']}}<br/>
   {{ $headphones[$i]['spl']}}<br/>
   {{ $headphones[$i]['oi']}}<br/>
   {{ $headphones[$i]['weight']}}<br/>
   {{ $headphones[$i]['ts']}}<br/>
   {{ $headphones[$i]['price']}}<br/><br/>
   @endfor

</body>
</html>