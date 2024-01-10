@extends('app')

@section('title', '耳機網站 - 列出所有廠牌')
@section('HP_theme', '廠牌資訊')
@section('HP_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    @can('admin')
    <a href="{{ route('brands.create') }}" style="color:#FF5500; font-weight: bold; font-style: italic;">新增廠牌</a>&nbsp;
    @endcan
    <a href="{{ route('brands.index') }}" style="color:#FF5500; font-weight: bold; font-style: italic;">所有廠牌</a>&nbsp;
    <a href="{{ route('brands.classic') }}" style="color: #FF5500; font-weight: bold; font-style: italic;">經典廠牌</a>&nbsp;

    <table class = "table table-hover" >
        <thead>
            <tr>
                <th style="border: 1px solid black; white-space: nowrap;">編號</th>
                <th style="border: 1px solid black; white-space: nowrap;">品牌名稱</th>
                <th style="border: 1px solid black; white-space: nowrap;">國家</th>
                <th style="border: 1px solid black; white-space: nowrap;">成立日期</th>
                <th style="border: 1px solid black; white-space: nowrap;">創辦人</th>
                <th style="border: 1px solid black; white-space: nowrap;">總部</th>
                <th style="border: 1px solid black; white-space: nowrap;">網站</th>
                <th style="border: 1px solid black; white-space: nowrap;">操作1</th>
                @can('admin')
                <th style="border: 1px solid black; white-space: nowrap;">操作2</th>
                <th style="border: 1px solid black; white-space: nowrap;">操作3</th>
                @elsecan('manager')
                <th style="border: 1px solid black; white-space: nowrap;">操作2</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr>
                <td style="border: 1px solid black;">{{ $brand->id}}</td>
                <td style="border: 1px solid black;">{{ $brand->name}}</td>
                <td style="border: 1px solid black;">{{ $brand->country}}</td>
                <td style="border: 1px solid black;">{{ $brand->since}}</td>
                <td style="border: 1px solid black;">{{ $brand->founder}}</td>
                <td style="border: 1px solid black;">{{ $brand->headquarters}}</td>
                <td style="border: 1px solid black;">{{ $brand->web}}</td>
                <td style="border: 1px solid black;"><a href="{{ route('brands.show',['id'=>$brand->id]) }}">顯示</a></td>
                @can('admin')
                <td style="border: 1px solid black;"><a href="{{ route('brands.edit',['id'=>$brand->id]) }}">修改</a></td>

                <td style="border: 1px solid black;">
                    <form action="{{ url('/brands/delete', ['id' =>$brand->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" style = "background-color: brown; color: white;" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
                @elsecan('manager')
                <td style="border: 1px solid black;"><a href="{{ route('brands.edit',['id'=>$brand->id]) }}">修改</a></td>
                @endcan
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
