<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ymホテル_トップページ</title>
    <style>
    /* ホーム画像 ----------------------------------*/
        .img-frame {
            position: relative;
            width: 100%;
            height: 620px;
            overflow: hidden;
            margin: 0 auto;
            clip-path: inset(0 round 50px 100px 50px 100px);
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


    header {
        display: flex;
        justify-content: space-between;
    }
    li {
        list-style: none;
        margin-right: 3rem; 
    }
    ul {
        display: flex;
    }
    </style>
</head>

<body>
    <header>
        <h1>YMホテル</h1>
        <nav>
            <ul>
                <li ><a href="../reservation/form.blade.php">予約</a></li>
                <li><a href="../guest/form.blade.php">新規会員登録</a> / <a href="#">ログイン</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="img-frame">
            <div class="img-01"></div>
            <div class="img-02"></div>
            <div class="img-03"></div>
        </div>
    </main>
</body>

</html>
