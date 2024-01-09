@extends('app')

@section('title', '耳機網站 - 列出所有耳機')
@section('HP_theme', '耳機品項')

@section('HP_contents')

<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    @can('admin')
    <a href="{{ route('headphones.create') }}" style="color: #ff5500; font-weight: bold; font-style: italic;">新增耳機</a>
    @endcan
    <a href="{{ route('headphones.index') }}" style="color: #ff5500; font-weight: bold; font-style: italic;">所有耳機</a>
    <a href="{{ route('headphones.cheappirce') }}" style="color: #ff5500; font-weight: bold; font-style: italic;">便宜耳機</a>
    <a href="{{ route('headphones.richpirce') }}" style="color: #ff5500; font-weight: bold; font-style: italic;">奢華耳機</a>
    <form action="{{ url('headphones/genre') }}" method='GET'>
        {!! Form::label('gen', '選取類型:') !!}
        {!! Form::select('gen', $genres, $selectedGenre,['class' => 'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢 " />
    </form>
</div>
<table style="border-collapse: collapse; width: 100%;">
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
        <th style="border: 1px solid black;">操作1</th>
        @can('admin')
        <th style="border: 1px solid black;">操作2</th>
        <th style="border: 1px solid black;">操作3</th>
        @elsecan('manager')
        <th style="border: 1px solid black;">操作2</th>
        @endcan

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
        <td style="border: 1px solid black;"><a href="{{ route('headphones.show',['id'=>$headphone->id]) }}">顯示</a></td>
        @can('admin')
        <td style="border: 1px solid black;"><a href="{{ route('headphones.edit',['id'=>$headphone->id]) }}">修改</a></td>
        <td style="border: 1px solid black;">
            <form action="{{ url('/headphones/delete', ['id' =>$headphone->id])}}" method="post">
                <input class="btn btn-default" type="submit" value="刪除" />
                @method('delete')
                @csrf
            </form>
        </td>
        @elsecan('manager')
        <td style="border: 1px solid black;"><a href="{{ route('headphones.edit',['id'=>$headphone->id]) }}">修改</a></td>
        @endcan
    </tr>
    @endforeach
</table>
{{ $headphones->withQueryString()->links() }}
@endsection
