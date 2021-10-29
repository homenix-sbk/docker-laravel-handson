@extends('layouts.staffapp')

@section('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>従業員リスト</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('header')
<header>
    <h1>Systra-Training school</h1>
</header>
@endsection

@section('container')
<h2><span>Menu</span></h2>
<div class="disp-box">
    <div class="topMenu">
        <a href="/add"><button class="btn-topMenu" type="button"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;新規登録</button></a>
    </div>
    <div class="emploList">
        <h3><span>従業員リスト</span></h3>
        <table>
            <tr>
                <th> No.</th>
                <th>従業員ID</th>
                <th>名前</th>
                <th>年齢</th>
                <th>入社日</th>
                <th>性別</th>
                <th>役職</th>
                <th>部署</th>
                <th>退職</th>
                <th>更新</th>
                <th>削除</th>
            </tr>
            @foreach ($items as $item)
            <tr>
                <td>{{$item->no}}</td>
                <td>{{$item->empId}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->joinDay}}</td>
                <td>
                @if ($item->gender != null)
                    {{$item->gender->getData()}}
                @endif
                </td>
                <td>
                @if ($item->position != null)
                    {{$item->position->getData()}}
                @endif
                </td>
                <td>
                @if ($item->depertment != null)
                    {{$item->depertment->getData()}}
                @endif
                </td>
                <td>
                @if ($item->retire == 0)
                    退職
                @else
                    在職
                @endif
                </td>
                <td><a href="#"><button class="btn-pink" type="button"><i class="fa fa-pencil" aria-hidden="true"></i>&ensp;編集</button></a></td>
                <td><a href="#"><button class="btn-glay" type="button" onclick="return confirm('No:${row.no }&ensp;/&ensp;${row.name}を削除してよろしいですか？');"><i class="fa fa-trash" aria-hidden="true"></i>&ensp;削除</button></a></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection

@section('footer')
<footer>
    copyright 2021 shibaco
</footer>
@endsection