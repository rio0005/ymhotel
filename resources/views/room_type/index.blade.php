<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
body {
background:#c1e0ff;
font-family:sans-serif;
}

table{
margin: 0 auto;
width: 900px;
}

table th {
vertical-align: middle;
height: 53px;
width: 124px;
text-align: center;
color: #4a488e;
font-size: 20px;
font-weight: bold;
}

table td {
height: 53px;
width: 100px;
border: none;
color: #333631;
font-size: 16px;
line-height: 16px;
text-align: center;
vertical-align: middle;
white-space: nowrap;
}

table tr:nth-child(odd){
        background-color: #99ccff;
    }

</style>
</head>

<body>
    <table>
    <th>部屋タイプ</th><th>宿泊可能人数</th>
    @foreach($room_types as $room_type)
    <tr>
        <td>{{$room_type->room_name}}</td>
        <td>{{$room_type->people}}</td>
    </tr>
    @endforeach
    </table>
</body>
</html>