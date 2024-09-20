<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <th>予約ID</th><th>部屋ID</th><th>宿泊日</th><th>宿泊料</th>
    @foreach($details as $detail)
    <tr>
        <td>{{$detail->reservation_id}}</th>
        <td>{{$detail->roomid}}</td>
        <td>{{$detail->check_in}}</th>
        <td>{{$detail->fee}}</th>
    </tr>
    @endforeach
    </table>
</body>
</html>