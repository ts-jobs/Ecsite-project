<!-- 購入履歴画面-->
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/history.css">

    <title>購入履歴(サンプル)</title>
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
   <h1 class="main-title">購入履歴</h1>
   <p class="main-txt"><span id="userName">サンプル太郎</span>様の購入商品一覧</p>

   <div class="cart-wrapper">
     <div class="search-area">
       <input type="search" placeholder="キーワードを入力" id="searchTxt">
       <a class="waves-effect waves-light btn" id="searchBtn">検索</a>
     </div>

     <table id="cartTable">

       <tr>
         <th>
           <div class="left-area">
             <img src="images/shohin.png" class="shohins">
           </div>
         </th>
         <td>
           <div class="right-area">

            <div class="shohin-areas">
               <p class="shohin-names">カジュアルなジャケット</p>
               <p class="shohin-makers">ブランド　：sample makers</p>
               <p class="shohin-colors">色／サイズ：ブルー／S</p>
               <p class="shohin-prices">価格　　　：¥5,000-（税込）</p>
               <p class="shohin-num">個数　　　：1個</p>
           </div>

           </div>
         </td>
       </tr>
       <tr>
         <th>
           <div class="left-area">
             <img src="images/shohin.png" class="shohins">
           </div>
         </th>
         <td>
           <div class="right-area">

            <div class="shohin-areas">
               <p class="shohin-names">カジュアルなジャケット</p>
               <p class="shohin-makers">ブランド　：sample makers</p>
               <p class="shohin-colors">色／サイズ：ブルー／S</p>
               <p class="shohin-prices">価格　　　：¥5,000-（税込）</p>
               <p class="shohin-num">個数　　　：1個</p>
           </div>

           </div>
         </td>
       </tr>
       <tr>
         <th>
           <div class="left-area">
             <img src="images/shohin.png" class="shohins">
           </div>
         </th>
         <td>
           <div class="right-area">

            <div class="shohin-areas">
               <p class="shohin-names">カジュアルなジャケット</p>
               <p class="shohin-makers">ブランド　：sample makers</p>
               <p class="shohin-colors">色／サイズ：ブルー／S</p>
               <p class="shohin-prices">価格　　　：¥5,000-（税込）</p>
               <p class="shohin-num">個数　　　：1個</p>
           </div>

           </div>
         </td>
       </tr>
       <tr>
         <th>
           <div class="left-area">
             <img src="images/shohin.png" class="shohins">
           </div>
         </th>
         <td>
           <div class="right-area">

            <div class="shohin-areas">
               <p class="shohin-names">カジュアルなジャケット</p>
               <p class="shohin-makers">ブランド　：sample makers</p>
               <p class="shohin-colors">色／サイズ：ブルー／S</p>
               <p class="shohin-prices">価格　　　：¥5,000-（税込）</p>
               <p class="shohin-num">個数　　　：1個</p>
           </div>

           </div>
         </td>
       </tr>


     </table>

     <div class="back-area">
       <p class="back-btn-area"><a href="" id="backBtn">＜＜TopPageへ戻る</a></p>
     </div>

   </div>

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
