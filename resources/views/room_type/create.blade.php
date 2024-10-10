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
    <title>部屋一覧</title>
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

        .annotation {
            font-size: 0.8rem
        }

        dl {
            display: flex;
            justify-content: center;
        }

        .area {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6rem;
        }

        img {
            border-radius: 40px;
        }

    /* 予約ボタン -------------------------*/
        .button a {
            position: relative;
            overflow: hidden;
            border-radius: 3px;
            text-decoration: none;
            display: block;
            max-width: 250px;
            /* border: 1px solid #555; */
            background: #dd9a63;
            margin: auto;
            padding: 12px 60px;
            font-family: "Noto Sans Japanese";
            font-weight: 500;
            text-align: center;
            line-height: 1.8;
            text-decoration: none;
            outline: none;
            transition: ease .2s;
        }

        .button a span {
            position: relative;
            z-index: 3;
            color: #333;
        }

        .button a:hover span {
            color: #fff;
        }

        .bgskew::before {
            content: '';
            position: absolute;
            top: 0;
            left: -130%;
            background: #834716;
            width: 120%;
            height: 100%;
            transform: skewX(-25deg);
        }

        .bgskew:hover::before {
            animation: skewanime .5s forwards;
        }

        @keyframes skewanime {
            100% {
                left: -10%;
            }
        }

    /* 予約ボタンここまで ----------------------*/
    </style>
</head>

<body>
    <header>
        <h1><a href="../main">YMhotel</a></h1>
        <nav>
            <ul>
                <li><a href="../room_type/create">部屋一覧</a></li>
                <li><a href="../restaurant">レストラン</a></li>
                <li><a class="Registration" href="../guest/form">新規会員登録</a> / <a class="Registration"
                        href="#">ログイン</a></li>
            </ul>
        </nav>
    </header>
    <div class="bg_pattern Boxes"></div>
    <h2>部屋一覧</h2>
    <div class="center">
        <h3>スーペリアルーム</h3>
        <img src="/storage/785_thumbnail.jpg" alt="スーペリアルーム" width="650" height="350">
        <p>４名様まで同一料金でご宿泊いただけます。</p>
        <p class="annotation">※客室は全席禁煙です。</p>
        <p class="annotation">※掲載されている画像はルームタイプの一例です。</p>
        <div class="area">
            <div class="detail">
                <dl>
                    <dt>定員：</dt>
                    <dd>４名</dd>
                </dl>
                <dl>
                    <dt>ベッドタイプ：</dt>
                    <dd>ツイン</dd>
                </dl>
                <dl>
                    <dt>広さ：</dt>
                    <dd>37平方メートル</dd>
                </dl>
            </div>
            <div class="button">
                <a class="bgskew" href="../reservation/form"><span>予約する</span></a>
            </div>
        </div>
    </div>

    <div class="center">
        <h3>スイートルーム</h3>
        <img src="/storage/821.jpg" alt="スイートルーム" width="700" height="350">
        <p>４名様まで同一料金でご宿泊いただけます。</p>
        <p class="annotation">※客室は全席禁煙です。</p>
        <p class="annotation">※客室の窓は外部への落下防止のため、開閉範囲が限られております。あらかじめご了承ください。</p>
        <div class="area">
            <div class="detail">
                <dl>
                    <dt>定員：</dt>
                    <dd>２名</dd>
                </dl>
                <dl>
                    <dt>ベッドタイプ：</dt>
                    <dd>ダブル</dd>
                </dl>
                <dl>
                    <dt>広さ：</dt>
                    <dd>199平方メートル</dd>
                </dl>
            </div>
            <div class="button">
                <a class="bgskew" href="../reservation/form"><span>予約する</span></a>
            </div>
        </div>
    </div>
</body>

</html>
