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

@section('back')
    <button id="back" class="btn-brown" type="button" value="top" onclick="location.href='index.jsp'"><i class="fa fa-undo" aria-hidden="true"></i>&emsp;Back</button>
@endsection

@section('container')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h3><span>新規登録</span></h3>
    <div class="content">
        <form id="form" action="/add" method="post">
        @csrf
            <div class="form-content">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label>従業員ID：</label>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <input type="text" name="empId" value="{{old('empId')}}" class="form-control" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label>名前：</label>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label>年齢：</label>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <input type="number" name="age" value="{{old('age')}}" maxlength="2" placeholder="半角数字" class="form-control" required />
                    </div>
                </div>
            <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label>入社日：</label>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <input type="date" name="joinDay" value="{{old('joinDay')}}" class="form-control" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label>性別：</label>
                    </div>
                    <div class="p-top-6 col-md-9 col-sm-12">
                        <label>
                            <input type="radio" name="genderId" id="g01" value="g01" required>
                            男性&emsp;
                        </label>
                        <label>
                            <input type="radio" name="genderId" id="g02" value="g02">
                            女性&emsp;
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label>役職：</label>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <select name="positionId" class="form-control">
                            <option value="p01">取締役会長</option>
                            <option value="p02">代表取締役</option>
                            <option value="p03">部長</option>
                            <option value="p04">課長</option>
                            <option value="p05">係長</option>
                            <option value="p06">主任</option>
                            <option value="p07">一般</option>
                            <option value="p08">インターン</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label>部署：</label>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <select name="depertmentId" class="form-control">
                            <option value="d01">開発部</option>
                            <option value="d02">総務部</option>
                            <option value="d03">法務部</option>
                            <option value="d04">人事部</option>
                            <option value="d05">経理部</option>
                            <option value="d06">営業部</option>
                            <option value="d07">マーケティング部</option>
                            <option value="d08">-</option>
                        </select>
                    </div>
                </div>
                <div class="row no-border">
                    <div class="col-md-3 col-sm-12">
                        <label>退職：</label>
                    </div>

                    <div class="p-top-6 col-md-9 col-sm-12">
                        <label>
                            <input type="radio" name="retire" id="0" value="0">
                            退職&emsp;
                        </label>
                        <label>
                            <input type="radio" name="retire" id="1" value="1" checked="checked">
                            在職&emsp;
                        </label>
                    </div>
                </div>
            </div>
            <p class="btnArea">
                <button id="submit" class="btn-brown" type="submit"><i class="fa fa-check-circle" aria-hidden="true"></i>&emsp;登&nbsp;録</button>
            </p>
        </form>
    </div>
@endsection

@section('footer')
<footer>
    copyright 2021 shibaco
</footer>
@endsection

