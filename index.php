<!doctype html>
<html lang="Ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
       
<body>

  <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-3 mb-3">
    <a class="navbar-brand" href="#">イーブイの進化</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">新規登録</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">データ一覧</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">エクスポート</a>
            </li>
        </ul>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
</nav>    

      <div class="container">
        <?php for($i = 1;$i <= 2;$i++) { ?>
          <div class="row">
            <?php for($j = 1;$j <= 4;$j++) { ?>
              <div class="col-sm">
                <div class="card">
                  <img src="img/3c882f8bd3ada9d4f19a0f15d7cde3e1.png" class="img-fluid" alt="Responsive image">
                  <div class="card-body">
                    <p class="card-text">サンダース</p>
                  </div>
                  <a href="./detail.php">ポケモン</a>
                </div>
              </div>
            <?php } ?>
          </div>
        <?php } ?>

        <!-- <div class="row">
          <div class="col-sm">
            <div class="card">
              <img src="img/185e0940b953a8bbee052540ab80e229.png" class="img-fluid" alt="Responsive image">
                <div class="card-body">
                  <p class="card-text">シャワーズ</p>
                </div>
                <a href="file:///Users/business14/Documents/sakai/b/detail.html">ポケモン</a>
              </div>
            
          </div>
          <div class="col-sm">
            <div class="card">
              <img src="img/3c882f8bd3ada9d4f19a0f15d7cde3e1.png" class="img-fluid" alt="Responsive image">
                <div class="card-body">
                  <p class="card-text">サンダース</p>
                </div>
                <a href="file:///Users/business14/Documents/sakai/b/detail.html">ポケモン</a>
              </div>
          
          </div>
          <div class="col-sm">
            <div class="card">
              <img src="img/ce7a495289998df2591b160b05db6ab2.png" class="img-fluid" alt="Responsive image">
              <div class="card-body">
                <p class="card-text">ブースター</p>
              </div>
              <a href="file:///Users/business14/Documents/sakai/b/detail.html">ポケモン</a>
            </div>
          </div>
          <div class="col-sm">
            <div class="card">
              <img src="img/6c42e79afa1fec8ea8eb44156c2c41ea.png" class="img-fluid" alt="Responsive image">
              <div class="card-body">
                <p class="card-text">エーフィ</p>
              </div>
              <a href="file:///Users/business14/Documents/sakai/b/detail.html">ポケモン</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm">
            <div class="card">
              <img src="img/848e443ca0d74b92e05ccbee596fbb9e.png" class="img-fluid" alt="Responsive image">
              <div class="card-body">
                <p class="card-text">ブラッキー</p>
              </div>
              <a href="file:///Users/business14/Documents/sakai/b/detail.html">ポケモン</a>
            </div>
          </div>
          <div class="col-sm">
            <div class="card">
              <img src="img/1eca7d5789e9bdd2d3ebc437903c9458.png" class="img-fluid" alt="Responsive image">
              <div class="card-body">
                <p class="card-text">リーフィア</p>
              </div>
              <a href="file:///Users/business14/Documents/sakai/b/detail.html">ポケモン</a>
            </div>
          </div>
          <div class="col-sm">
            <div class="card">
              <img src="img/0cb34207f244ddb0316bae53ce8652d5.png" class="img-fluid" alt="Responsive image">
              <div class="card-body">
                <p class="card-text">グレイシア</p>
              </div>
              <a href="file:///Users/business14/Documents/sakai/b/detail.html">ポケモン</a>
            </div>
          </div>
          <div class="col-sm">
            <div class="card">
              <img src="img/d4c0134c677c262ed8c8f8b14862891c.png" class="img-fluid" alt="Responsive image">
              <div class="card-body">
                <p class="card-text">ニンフィア</p>
              </div>
              <a href="file:///Users/business14/Documents/sakai/b/detail.html">ポケモン</a>
            </div>
          </div>
        </div> -->
      </div>
      <footer class="footer">
        <p class="text-center">@copyright 2021.</p>
      </footer>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>