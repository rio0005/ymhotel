<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YMホテル予約</title>
    <style>
* { margin: 0; padding: 0; box-sizing: border-box; }
body {
  background: #e9e9e9;
  color: #5e5e5e;
  font: 400 87.5%/1.5em 'Open Sans', sans-serif;
}

/* Form Layout */
.form-wrapper {
  background: #fafafa;
  /* border: 1px solid black; */
  margin: 3em auto;
  padding: 0 1em;
  max-width: 370px;
}

h1 {
  text-align: center;
  padding: 1em 0;
}

form {
  padding: 0 1.5em;
}

.form-item {
  margin-bottom: 0.75em;
  width: 100%;
}

.form-item input {
  background: #fafafa;
  border: none;
  border-bottom: 2px solid #e9e9e9;
  color: #666;
  font-family: 'Open Sans', sans-serif;
  font-size: 1em;
  height: 50px;
  transition: border-color 0.3s;
  width: 100%;
}

.form-item input:focus {
  border-bottom: 2px solid #c0c0c0;
  outline: none;
}

.button-panel {
  margin: 2em 0 0;
  width: 100%;
 padding: 2em 0;
}

.button-panel .button {
  background: #f16272;
  border: none;
  color: #fff;
  cursor: pointer;
  height: 50px;
  font-family: 'Open Sans', sans-serif;
  font-size: 1.2em;
  letter-spacing: 0.05em;
  text-align: center;
  text-transform: uppercase;
  transition: background 0.3s ease-in-out;
  width: 100%;
}

.button:hover {
  background: #ee3e52;
}


/* dateで入ってるデフォルトの「年/月/日」を消す */
input[type="date"] {
  position: relative;
  color: #5e5e5e;
}

input[type="date"]::after {
  content: attr(data-date);
  display: inline-block;
  position: absolute;
  top: 3px;
  left: 3px;
}

input[type="date"]::-webkit-datetime-edit {
  visibility: hidden;
}
    </style>
    
    <script>
        /* dateで入ってるデフォルトの「年/月/日」を消す */
        document.querySelector('input[type="date"]').addEventListener('change', event => {
        const target = event.target;
        target.setAttribute('data-date', target.value);
        }, false);
    </script>

</head>
<body>
    <div class="form-wrapper">
        <h1>ホテル予約</h1>
    <form action="{{ route('reservation.store') }}" method="POST" class="">
        @csrf
        <div class="form-item">
        <label for="guest_id"></label>
        <input type="number" name="guest_id" placeholder="利用者ID" required autofocus>
        </div>
        <br>
        <div class="form-item">
        <label for="people"></label>
        <input type="number" name="people" placeholder="人数" required>
        </div>
        <br>
        <div class="form-item">
        <label for="check_in">チェックイン日付</label>
        <input type="date" name="check_in" placeholder="チェックイン日付" required>
        </div>
        <br>
         <div class="form-item">
        <label for="check_out">チェックアウト日付</label>
        <input type="date" name="check_out" placeholder="チェックアウト日付" required>
        </div>
        <br>
        <div class="button-panel">
        <input type="submit" value="予約" class="button">
        </div>
    </form>
    <a href="../room_type/create">部屋一覧へ戻る</a>
    </div>
</body>
</html>