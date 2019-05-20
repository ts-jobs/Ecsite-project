<!-- 登録内容確認画面-->
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/confirm.css">

    <title>登録確認画面(サンプル)</title>
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
   <h1 class="main-title">登録内容確認</h1>
   <p class="main-txt">登録内容を確認し、内容に間違いがなければ「登録」ボタンを押して下さい</p>

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
            <span class="answers"><label for="lastName">姓：</label><span class="last-name right-margin">Sample</span></span>
            <span class="answers"><label for="firstName">名：</label><span class="first-name right-margin">太郎</span></span>
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
            <span class="answers"><label for="lastFurigana">セイ：</label><span class="last-furigana right-margin">サンプル</span></span>
            <span class="answers"><label for="firstFurigana">メイ：</label><span class="first-furigana right-margin">タロウ</span></span>
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
            <span class="answers"><span class="right-margin">男性</span></span>
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
            <span class="answers"><span class="year">1991</span><label for="year" class="right-margin">年</label></span>
            <span class="answers"><span class="month">12</span><label for="month" class="right-margin">月</label></span>
            <span class="answers"><span class="day">13</span><label for="day">日</label></span>
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
            <span class="answers"><span class="tell-nums">000</span></span>-
            <span class="answers"><span class="tell-nums">000</span</span>-
            <span class="answers"><span class="tell-nums">000</span</span>
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
            <span class="answers"><span class="e-mail">sample@sample.com</span</span>
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
            <span class="answers"><span class="e-mail">sample@sample.com</span></span>
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
            <p class="answers"><label for="postMark" class="right-margin">〒</label><span class="postmark">111-1111</span></p>
            <p class="answers"><label for="ken">都道府県</label><span class="ken-text">○○県</span></p>
            <p class="answers"><label for="city">市区町村番地</label><span class="city-text">△△市</span></p>
            <p class="answers"><label for="other">マンション名</label><span class="other-text">□□町　0-0-0</span></p>
          </div>
        </td>
      </tr>

      <tr>
        <th>
          <div class="questions-area">
            <span class="questions">利用規約</span>
            <span class="required">必須</span>
          </div>
        </th>
        <td>
          <div class="answers-area">
            <span class="answers">同意する</span>
        </td>
      </tr>


    </table>

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
    <script src="js/confirm.js"></script>
</body>
</html>
