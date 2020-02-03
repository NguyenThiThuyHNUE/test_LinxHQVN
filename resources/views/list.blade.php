@extends('layouts.app')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@section('content')
    <body>
    <div class="container">
        <div class="col-12">
            <div class="row">

                <h1>List Leave Request</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên người xin phép</th>
                        <th scope="col">Ngày bắt đầu</th>
                        <th scope="col">Giờ bắt đầu</th>
                        <th scope="col">Lý do nghỉ phép</th>
                        <th scope="col">Tên người phê duyệt</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($leaves)==0)
                        <tr>
                            <td colspan="4">Khong co du lieu</td>
                        </tr>
                    @else
                        @foreach($leaves as $key => $leave)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td>{{$leave['name_of_leave']}}</td>
                                <td>{{$leave['start_date']}}</td>
                                <td>{{$leave['begin_date']}}</td>
                                <td>{{$leave['reason_of_leave']}}</td>
                                <td>{{$leave['approver_of_name']}}</td>
                                <td>Duyệt</td>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a class="card-header" href="{{route('create')}}">Create Leave Request</a>
    </body>
@endsection
</html>
