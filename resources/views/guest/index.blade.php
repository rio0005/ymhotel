@extends('guest.create')

@section('body')
    <table>
    <th>お客様ID</th><th>お名前</th><th>ご住所</th><th>電話番号</th>
    @foreach($guests as $guest)
    <tr>
        <td>{{$guest->id}}</td>
        <td>{{$guest->name}}</td>
        <td>{{$guest->address}}</td>
        <td>{{$guest->tel}}</td>
    </tr>
    @endforeach
    </table>
@endsection

<style>

    table {
    width: 100%;
    text-align: center;
    border-collapse: collapse;
    border-spacing: 0;
    background: #caa472;
    color: #ffffff;
    }
    table th {
    padding: 10px;
    background: #a76b27ea;
    border: solid 1px #ffffff;
    }
    table td {
     padding: 10px;
    border: solid 1px #ffffff;
    }

</style>