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
    <th>予約ID</th><th>利用者ID</th><th>お名前</th><th>ご住所</th><th>電話番号</th><th>人数</th><th>チェックイン</th><th>チェックアウト</th>
    <th>料金</th>
    @foreach($reservations as $reservation)
    <tr>
        <td>{{$reservation->id}}</td>
        <td>{{$reservation->guest->id??'非登録'}}</td>
        <td>{{$reservation->guest->name??'非登録'}}様</td>
        <td>{{$reservation->guest->address??'非登録'}}</td>
        <td>{{$reservation->guest->tel??'非登録'}}</td>
        <td>{{$reservation->people}}</td>
        <td>{{$reservation->check_in}}</td>
        <td>{{$reservation->check_out}}</td>
        {{-- 多対多 中間テーブルdetailから持ってきたデータ --}}
        <td>{{$reservation->rooms->first()->pivot->fee}}</td>
    </tr>
    @endforeach
    </table>
</body>
</html>





