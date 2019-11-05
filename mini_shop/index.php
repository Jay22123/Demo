<!DOCTYPE html>
<html lang="zh-Hant">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>測試網頁</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">


    <!--[if lt IE 9]>
      <script src="bootstrap/js/html5shiv.min.js"></script>
      <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/jquery-migrate.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">

      <div id="web_head">
        <a href="index.php">
          <img src="images/head.jpg" alt="測試網站" class="img-responsive">
        </a>
      </div>

      <div id="web_main" class="row">
        <div class="col-md-3 col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading">功能表</div>
            <div class="panel-body">
              <form action="index.php" method="post" role="form" class="form-horizontal">
                <div class="form-group">
                  <label class="col-md-4 control-label">帳號:</label>
                  <div class="col-md-8">
                    <input type="text" name="user_name" value="" class="form-control" placeholder="輸入帳號"
                  </div>
                </div>>
                <div class="form-group">
                  <label class="col-md-4"></label>
                  <div class="col-md-7">
                    <button type="sumbit" name="button" class="btn btn-primary btn-block">送出</button>
                  </div>
                </div>
              </form>
              <?php
              require_once "config.php";
                if (isset($_POST['user_name'])) {
                    echo "<div class='alert alert-success'>{$_POST['user_name']}.您好!歡迎". _WEB_NAME ."</div>";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-sm-8" >主內容區</div>
    </div>
      <div id="web_foot">
        <div>地址:xxxxx</div>
        <div>電話:xxxxx</div>
        <div>版權所有 copyright</div
      </div>

  </body>
</html>
