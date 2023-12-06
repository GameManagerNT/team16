@extends('app')

@section('title', 'HP網站 - 列出所有廠牌')

@section('HP_contents')



    <title>列出所有廠牌</title>



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

        @foreach ($brands as $brand)
        <tr>  
            <td>{{ $brand->id}}</td>
            <td>{{ $brand->name}} </td>
            <td>{{ $brand->country}} </td>
            <td>{{ $brand->since}} </td>
            <td>{{ $brand->founder}} </td>
            <td>{{ $brand->headquarters}} </td>
            <td>{{ $brand->web}} </td>
            <td><a href="{{ route('brands.show',['id'=>$brand->id]) }}">顯示</a></td>
            <td><a href="{{ route('brands.edit',['id'=>$brand->id]) }}">修改</a></td>
            <td><form action="{{ url('/brands/delete', ['id' => $brand->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    @endsection