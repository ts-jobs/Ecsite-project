<!-- 商品カート画面-->
<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/cart.css">

    <title>商品カート(サンプル)</title>
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
   <p class="main-txt"><span id="userName">サンプル太郎</span>様のカート商品一覧</p>

   <div class="cart-wrapper">

     <div class="cart-area">
       <p class="total-area">合計金額：<span id="totalValue">10,000</span>円</p>
     </div>

     <table id="cartTable">
       <tr>
         <th>
           <div class="left-area">f</div>
         </th>
         <td>
           <div class="right-area">f</div>
         </td>
       </tr>
     </table>
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
