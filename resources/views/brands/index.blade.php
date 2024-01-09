
@extends('app')

@section('title', 'HP網站 - 列出所有廠牌')

@section('HP_theme', '耳機廠牌')

@section('HP_contents')
<div class="p-6 border-t border-red-200 dark:border-red-700 md:border-t-0 md:border-l">
    @can('admin')
    <a href="{{ route('brands.create') }} ">新增廠牌</a>
    @endcan
    <a href="{{ route('brands.index') }} ">所有廠牌</a>
    <a href="{{ route('brands.classic') }} ">經典廠牌</a>
</div>

<table>
    <tr style="background-color: #f2f2f2;">
        <th>編號</th>
        <th>品牌名稱</th>
        <th>國家</th>
        <th>成立日期</th>
        <th>創辦人</th>
        <th>總部</th>
        <th>網站</th>
        <th>操作1</th>
        @can('admin')
        <th>操作2</th>
        <th>操作3</th>
        @elsecan('manager')
        <th>操作2</th>
        @endcan
    </tr>
    @foreach ($brands as $brand)
        <tr>
            <td>{{ $brand->id }}</td>
            <td>{{ $brand->name }}</td>
            <td>{{ $brand->country }}</td>
            <td>{{ $brand->since }}</td>
            <td>{{ $brand->founder }}</td>
            <td>{{ $brand->headquarters }}</td>
            <td>{{ $brand->web }}</td>
            <td><a href="{{ route('brands.show', ['id'=>$brand->id]) }}">顯示</a></td>
            @can('admin')
            <td><a href="{{ route('brands.edit', ['id'=>$brand->id]) }}">修改</a></td>    
            <td>
                <form action="{{ url('/brands/delete', ['id' => $brand->id]) }}" method="post">
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('確定要刪除嗎？')">刪除</button>
                    @method('delete')
                    @csrf
                </form>
            </td>
            @elsecan('manager')
            <td><a href="{{ route('brands.edit', ['id'=>$brands->id]) }}">修改</a></td>    
            @endcan
        </tr>
    @endforeach
</table>

@endsection