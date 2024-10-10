<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Decol:wght@400;500;700&display=swap" rel="stylesheet">
    <title>レストラン</title>
    <style>
        body {
            margin: 0;
            text-align: center;
        }

        /* ナビゲーション --------------------------*/
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: rgb(187, 222, 255);
            position: fixed;
            width: 100%;
            z-index: 1;
        }

        h1 {
            font-family: "Protest Strike", sans-serif;
            font-weight: 400;
            font-style: normal;
            padding-left: 1rem;
        }

        li {
            list-style: none;
            margin-right: 3rem;
        }

        .Registration {
            color: #a14e00;
        }

        a {
            text-decoration: none;
            color: black;
        }

        ul {
            display: flex;
            align-items: center;
        }

        /* ナビゲーションここまで --------------------------*/

        h2 {
            font-family: "Kaisei Decol", serif;
            font-weight: 700;
            font-style: normal;
            margin: 0;
            padding-top: 8rem;
            color: rgb(73, 167, 255);
        }

        h3 {
            font-family: "Kaisei Decol", serif;
            font-weight: 500;
            font-style: normal;
            font-size: 20px;
            color: rgb(68, 164, 255);
            padding-bottom: 1.5rem;
        }

        .center {
            margin: 4rem;
            border-top: 3px solid #88ddff;
            padding-top: 2rem;
        }

        .colum {
            display: flex;
            align-items: center;
        }

        .colum-text {
            margin-left: 30px;
        }

        .colum-img {
            position: relative;
            display: inline-block;
            font-size: 0;
            line-height: 0;
        }

        .colum-img::after {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            -moz-box-shadow: inset 0px 0px 15px 15px #fff;
            -webkit-box-shadow: inset 0px 0px 15px 15px #fff;
            box-shadow: inset 0px 0px 15px 15px #fff;
            content: " ";
        }

        .annotation {
            margin-top: 3rem;
        }
    </style>
</head>

<body>
    <header>
        <h1><a href="../main">YMhotel</a></h1>
        <nav>
            <ul>
                <li><a href="../room_type/create">部屋一覧</a></li>
                <li><a href="#">レストラン</a></li>
                <li><a class="Registration" href="../guest/form">新規会員登録</a> / <a class="Registration" href="#">ログイン</a></li>
            </ul>
        </nav>
    </header>
    <div class="bg_pattern Boxes"></div>
    <h2>レストラン一覧</h2>
    <div class="center">
        <h3>シルクロードガーデン</h3>
        <div class="colum">
            <div class="colum-img"><img src="/storage/restaurant_01.jpg" alt="シルクロードガーデン" width="530" height="300">
            </div>
            <div class="colum-text">
                <p>異国情緒漂う空間で、本格的な中国料理をご堪能ください。</p>
                <p class="annotation">[ゲストサービス]</p>
                <p>お子様メニューあり、低アレルゲンメニューあり</p>
            </div>
        </div>
    </div>
    <div class="center">
        <h3>ベッラヴィスタ・ラウンジ</h3>
        <div class="colum">
            <div class="colum-img"><img src="/storage/restaurant_02.jpg" alt="シルクロードガーデン" width="530" height="300">
            </div>
            <div class="colum-text">
                <p>イタリア料理とお飲み物を東京ディズニーシーの景観とともにお楽しみください。</p>
                <p class="annotation">[ゲストサービス]</p>
                <p>お子様メニューあり、低アレルゲンメニューあり</p>
            </div>
        </div>
    </div>
</body>

</html>
