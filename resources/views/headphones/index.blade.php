@extends('app')

@section('title', 'HP網站 - 列出所有耳機')

@section('HP_theme', '所有耳機')

@section('HP_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    @can('admin')
    <a href="{{ route('headphones.create') }} ">新增耳機</a>
    @endcan
    <a href="{{ route('headphones.index') }} ">所有耳機</a>
    <a href="{{ route('headphones.rich') }} ">奢華耳機</a>
    <a href="{{ route('headphones.cheap') }} ">平價耳機</a>    
    <form action="{{ url('headphones/genre') }}" method='GET'>
        {!! Form::label('gen', '選取種類：') !!}
        {!! Form::select('gen', $genres, $selectedGenre, ['class' => 'form-control']) !!}
        <input class="btn btn-default" type="submit" value="查詢" />
    </form>    
</div>

<table>
<tr style="background-color: #f2f2f2;"> <!-- Set your desired background color here -->
        <th>編號</th>
        <th>耳機名稱</th>
        <th>種類</th>
        <th>頻率響應</th>
        <th>聲壓級</th>
        <th>抗阻</th>
        <th>重量</th>
        <th>傳輸</th>
        <th>價格</th>
        <th>操作1</th>
        @can('admin')
        <th>操作2</th>
        <th>操作3</th>
        @elsecan('manager')
        <th>操作2</th>
        @endcan
    </tr>
    @foreach ($headphones as $headphone)
        <tr>
            <td>{{ $headphone->id }}</td>
            <td>{{ $headphone->name }}</td>
            <td>{{ $headphone->genre }}</td>
            <td>{{ $headphone->hz }}</td>
            <td>{{ $headphone->spl }}</td>
            <td>{{ $headphone->oi }}</td>
            <td>{{ $headphone->weight }}</td>
            <td>{{ $headphone->ts }}</td>
            <td>{{ $headphone->price }}</td>
            <td><a href="{{ route('headphones.show', ['id'=>$headphone->id]) }}">顯示</a></td>
            @can('admin')
            <td><a href="{{ route('headphones.edit', ['id'=>$headphone->id]) }}">修改</a></td>    
            <td>
                <form action="{{ url('/headphones/delete',['id'=>$headphone->id])}}"method="post">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('確定要刪除嗎？')">刪除</button>
                    @method('delete')
                    @csrf
                </form>
            </td>        
            @elsecan('manager')
            <td><a href="{{ route('headphones.edit', ['id'=>$headphone->id]) }}">修改</a></td>
            @endcan
        </tr>
    @endforeach
<table>
{{ $headphones->withQueryString()->links() }}
@endsection