<!-- ログイン画面-->
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/new.css">

    <title>会員登録画面(サンプル)</title>
  </head>
<body>
<!-- ここからヘッダー -->
<div class="header-wrapper">
 <p class="logo">Logo</p>
</div>
<!-- ここまでヘッダー -->

<!-- ここまでメイン -->
<div class="main-wrapper">
 <div class="main-container">
   <h1 class="main-title">新規登録</h1>

   <!-- ここからテーブル -->
   <form id="login-form" method="post" action="">
    <table class="new-form">

      <tr>
        <th>
          <div class="questions-area">
            <span class="questions">お名前</span>
            <span class="required">必須</span>
          </div>
        </th>
        <td>
          <div class="answers-area">
            <span class="answers"><label for="lastName">姓：</label><input type="text" id="lastName" class="last-name"></span>
            <span class="answers"><label for="firstName">名：</label><input type="text" id="firstName" class="first-name"></span>
          </div>
        </td>
      </tr>

      <tr>
        <th>
          <div class="questions-area">
            <span class="questions">フリガナ</span>
            <span class="required">必須</span>
          </div>
        </th>
        <td>
          <div class="answers-area">
            <span class="answers"><label for="lastFurigana">セイ：</label><input type="text" id="lastFurigana" class="last-furigana"></span>
            <span class="answers"><label for="firstFurigana">メイ：</label><input type="text" id="firstFurigana" class="first-furigana"></span>
          </div>
        </td>
      </tr>

      <tr>
        <th>
          <div class="questions-area">
            <span class="questions">性別</span>
            <span class="required">必須</span>
          </div>
        </th>
        <td>
          <div class="answers-area">
            <span class="answers"><label><input type="radio" id="male" name="sex" class="sexes"><span class="right-margin">男性</span></label></span>
            <span class="answers"><label><input type="radio" id="female" name="sex" class="sexes"><span class="right-margin">女性</span></label></span>
          </div>
        </td>
      </tr>

      <tr>
        <th>
          <div class="questions-area">
            <span class="questions">生年月日</span>
            <span class="required">必須</span>
          </div>
        </th>
        <td>
          <div class="answers-area">
            <span class="answers"><input type="text" id="year" class="year"><label for="year">年</label></span>
            <span class="answers"><input type="text" id="month" class="month"><label for="month">月</label></span>
            <span class="answers"><input type="text" id="day" class="day"><label for="day">日</label></span>
          </div>
        </td>
      </tr>

      <tr>
        <th>
          <div class="questions-area">
            <span class="questions">電話番号</span>
            <span class="required">必須</span>
          </div>
        </th>
        <td>
          <div class="answers-area">
            <span class="answers"><input type="text" id="tellNum1" class="tell-nums"></span>-
            <span class="answers"><input type="text" id="tellNum2" class="tell-nums"></span>-
            <span class="answers"><input type="text" id="tellNum3" class="tell-nums"></span>
          </div>
        </td>
      </tr>

      <tr>
        <th>
          <div class="questions-area">
            <span class="questions">メールアドレス<br>(ユーザーID)</span>
            <span class="required">必須</span>
          </div>
        </th>
        <td>
          <div class="answers-area">
            <span class="answers"><input type="email" id="mail" class="e-mail"></span>
          </div>
        </td>
      </tr>

      <tr>
        <th>
          <div class="questions-area">
            <span class="questions">メールアドレス<br>(確認用)</span>
            <span class="required">必須</span>
          </div>
        </th>
        <td>
          <div class="answers-area">
            <span class="answers"><input type="email" id="reEmail" class="e-mail"></span>
          </div>
        </td>
      </tr>

      <tr>
        <th>
          <div class="questions-area">
            <span class="questions">お住まい</span>
            <span class="required">必須</span>
          </div>
        </th>
        <td>
          <div class="answers-area">
            <span class="answers"><label for="postMark">〒</label><input type="text" id="postMark" class="postmark"></span>
            <p class="answers"><label for="ken">都道府県</label><input type="text" id="ken" class="ken-text"></p>
            <p class="answers"><label for="city">市区町村番地</label><input type="text" id="city" class="city-text"></p>
            <p class="answers"><label for="other">マンション名</label><input type="text" id="other" class="other-text"></p>
          </div>
        </td>
      </tr>

    </table>

    <div class="agree-container">
      <p class="agree-title">利用規約</p>
      <textarea class="agree-txt" readonly>利用規約本文</textarea>
      <p class="agree-area"><label><input type="checkbox" id="agree"><span class="right-margin">利用規約に同意する</span></label></p>
    </div>
    <button class="btn waves-effect waves-light" type="submit" name="action" id="sendBtn">登録</button>
   </form>
   <!-- ここまでテーブル -->

 </div>
</div>
<!-- ここまでメイン -->




<!-- ここからフッター -->
<div class="footer-wrapper">
 <p class="copyright">Ⓒts-jobs Sample App 2019</p>
</div>
<!-- ここまでフッター -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/new.js"></script>
</body>
</html>
