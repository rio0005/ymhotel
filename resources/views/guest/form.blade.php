<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>利用者入力フォーム</title>
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

    </style>
</head>
<body>
    <div class="form-wrapper">
        <h1>利用者登録</h1>
    <form action="{{ route('guest.store') }}" method="POST" class="">
        @csrf
        <div class="form-item">
        <label for="name"></label>
        <input type="text" name="name" placeholder="名前" required autofocus>
        </div>
        <br>
        <div class="form-item">
        <label for="address"></label>
        <input type="text" name="address" placeholder="住所" required>
        </div>
        <br>
        <div class="form-item">
        <label for="tel"></label>
        <input type="tel" name="tel" placeholder="電話番号" required>
        </div>
        <br>
        <div class="button-panel">
        <input type="submit" value="登録" class="button">
        </div>
    </form>
    </div>
</body>
</html>