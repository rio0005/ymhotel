<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table{
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
    }
    table th, table td{
        padding: 10px 0;
        text-align: center;
    }
    table tr:nth-child(odd){
        background-color: #eee;
    }

</style>
    
</head>
<body>
        <table>
    <th>利用者ID</th><th>人数</th><th>チェックイン</th><th>チェックアウト</th>
    @foreach($reservations as $reservation)
    <tr>
        <td>{{$reservation->userid}}</th>
        <td>{{$reservation->people}}</td>
        <td>{{$reservation->check_in}}</th>
        <td>{{$reservation->check_out}}</th>
    </tr>
    @endforeach
    </table>
</body>
</html>





