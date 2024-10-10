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
    <title>ymホテル_トップページ</title>
    <style>
        body {
            margin: 0;
        }

        /* ナビゲーション --------------------*/
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

        /* ナビゲーションここまで -------------------*/

        /* ホーム画像 ----------------------------------*/
        .img-frame {
            position: relative;
            width: 100%;
            height: 730px;
            overflow: hidden;
            margin: 0 auto;

        }

        /* .img-frame::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(223, 223, 223, 0.5);
        } */

        .img-01,
        .img-02,
        .img-03 {
            margin-top: 1rem;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .img-01 {
            background-image: url("/storage/main_1.jpg");
            animation: slide-animation-01 24s infinite;
        }

        .img-02 {
            background-image: url('/storage/main_2.jpg');
            animation: slide-animation-02 24s infinite;
        }

        .img-03 {
            background-image: url('/storage/main_3.jpg');
            animation: slide-animation-03 24s infinite;
        }

        @keyframes slide-animation-01 {
            0% {
                opacity: 1;
                transform: scale(1.0);
            }

            30% {
                opacity: 1;
                /* transform: scale(1.0); */
            }

            40% {
                opacity: 0;
                transform: scale(1.13);
            }

            90% {
                opacity: 0
            }

            100% {
                opacity: 1;
                transform: scale(1.0);
            }
        }

        @keyframes slide-animation-02 {
            0% {
                opacity: 0;
            }

            30% {
                opacity: 0;
                transform: scale(1.1);
            }

            40% {
                opacity: 1;
            }

            60% {
                opacity: 1;
            }

            70% {
                opacity: 0;
                transform: scale(1.0);
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes slide-animation-03 {
            0% {
                opacity: 0;
            }

            60% {
                opacity: 0;
                transform: scale(1.0);
            }

            70% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                transform: scale(1.1);
            }
        }

        /* ホーム画像ここまで -----------------------*/

        h2 {
            font-family: "Kaisei Decol", serif;
            font-weight: 700;
            font-style: normal;
            text-align: center;
            margin: 4rem 20rem;
            padding: 2rem;
            border: 8px solid #815800;
            border-radius: 30px;
        }

        h3 {
            font-family: "Kaisei Decol", serif;
            font-weight: 700;
            font-style: normal;
            color: rgb(68, 164, 255);
        }

        .colum:nth-child(even) {
            display: flex;
            flex-direction: row-reverse;
            margin: 4rem 4rem;
            text-align: center;
            align-items: center;
        }

        .colum:nth-child(odd) {
            display: flex;
            margin: 4rem 4rem;
            text-align: center;
            align-items: center;
        }

        .colum-text {
            margin: 20px;
        }

        img {
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <header>
        <h1><a href="#">YMhotel</a></h1>
        <nav>
            <ul>
                <li><a href="../room_type/create">部屋一覧</a></li>
                <li><a href="../restaurant">レストラン</a></li>
                <li><a class="Registration" href="../guest/form">新規会員登録</a> / <a class="Registration" href="#">ログイン</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="img-frame">
            <div class="img-01"></div>
            <div class="img-02"></div>
            <div class="img-03"></div>
        </div>
        <h2>YMhotelの魅力</h2>
        <div class="colum">
            <div class="colum-imag">
                <img src="/storage/colum_01.jpg" alt="シー" width="570" height="350">
            </div>
            <div class="colum-text">
                <h3>東京ディズニーシーの中にあるホテル</h3>
                <p>東京ディズニーシー・ホテルミラコスタは東京ディズニーシーでの冒険の余韻をそのままに、パークの中に宿泊できるディズニーテーマパーク一体型ホテルです。
                    ホテルゲスト専用のエントランス「ホテル＆パーク・ゲートウェイ」にて東京ディズニーシーと直接行き来することができるのは、パーク一体型ホテルならではです。</p>
            </div>
        </div>
        <div class="colum">
            <div class="colum-imag">
                <img src="/storage/colum_02.jpg" alt="ホテル" width="570" height="350">
            </div>
            <div class="colum-text">
                <h3>東京ディズニーシーとの一体感を感じられる客室</h3>
                <p>イタリアンクラシックをコンセプトにした上質な空間で、パークでの余韻に浸りながらくつろぎのひとときを。
                    ポルト・パラディーゾの街並みや港の眺望をお楽しみいただける客室もございます。</p>
            </div>
        </div>

    </main>
</body>

</html>
