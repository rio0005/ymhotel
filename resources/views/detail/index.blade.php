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
    <th>予約明細ID</th><th>予約ID</th><th>部屋ID</th><th>宿泊日</th><th>宿泊料</th>
    @foreach($details as $detail)
    <tr>
        <td>{{$detail->id}}</td>
        <td>{{$detail->rooms->reservation_id}}</th>
        <td>{{$detail->room_id}}</td>
        <td>{{$detail->days}}</th>
        <td>{{$detail->fee}}</th>
    </tr>
    @endforeach
    </table>
</body>
</html>