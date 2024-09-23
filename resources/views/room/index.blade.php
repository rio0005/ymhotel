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
    <th>部屋種別ID</th><th>部屋番号</th>
    @foreach($rooms as $room)
    <tr>
        <td>{{$room->room_type_id}}</td>
        <td>{{$room->room_number}}</td>
    </tr>
    @endforeach
    </table>
</body>
</html>
