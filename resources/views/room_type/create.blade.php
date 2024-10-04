<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>部屋一覧</title>
    <style>
        /* 背景 ----------------------------*/
        .bg_pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: #ffe9a7;
            opacity: 0.4;
            z-index: -1;
        }

        .Boxes {
            background-image: linear-gradient(#ffc10731 2px, transparent 2px), linear-gradient(to right, #ffc10738 2px, #ffffff 2px);
            background-size: 40px 40px;
        }
        /* 背景ここまで--------------------- */

        body {
            text-align: center;
        }

        h1 {
            color: rgba(192, 46, 2, 0.884);
        }

        h2 {
            color: rgba(194, 44, 17, 0.795);
            padding-bottom: 1.5rem;
        }

        .center {
            margin: 4rem;
            border-top: 3px solid rgba(126, 5, 5, 0.493);
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
    <div class="bg_pattern Boxes"></div>
    <h1>部屋一覧</h1>
    <div class="center">
        <h2>スーペリアルーム</h2>
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
        <h2>スイートルーム</h2>
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
