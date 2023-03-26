<?php
session_start();
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Вход</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>

  <link rel="stylesheet" href="../style/login.css">
</head>

<body>
  
<!-- Form-->
<div class="form">
  <div class="form-panel one">
    <div class="form-header">
      <h1>Авторизация</h1>
    </div>
    <div class="form-content">
      <form action="./vendor/log.php" method="post">
        <div class="form-group">
          <label for="loguser">Логин</label>
          <input type="text" id="loguser" name="loguser" required="required"/>
        </div>
        <div class="form-group">
          <label for="logpass">Пароль</label>
          <input type="password" id="logpass" name="logpass" required="required"/>
        </div>
        <div class="form-group">
          <button type="submit">Войти</button>
        </div>
      </form>
      <?php
				if (($_SESSION["errMes"] ?? '') === ''); else {
					print_r($_SESSION["errMes"]);
				}
			?>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>
</html>
