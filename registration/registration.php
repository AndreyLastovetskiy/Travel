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

      <link rel="stylesheet" href="../style/registration.css">

  
</head>

<body>
  
<!-- Form-->
<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel two">
    <div class="form-header">
      <h1>Регистрация</h1>
    </div>
    <div class="form-content">
      <form action="./vendor/reg.php" method="post">
        <div class="form-group">
          <label for="reguser">Логин</label>
          <input type="text" id="reguser" name="reguser" required="required"/>
        </div>
        <div class="form-group">
          <label for="regfio">ФИО</label>
          <input type="text" id="regfio" name="regfio" required="required"/>
        </div>
        <div class="form-group">
          <label for="regpass">Пароль</label>
          <input type="password" id="regpass" name="regpass" required="required"/>
        </div>
        <div class="form-group">
          <label for="regcpass">Подтверждение Пароля</label>
          <input type="password" id="regcpass" name="regcpass" required="required"/>
        </div>
        <div class="form-group">
          <label for="regemail">Email</label>
          <input type="email" id="regemail" name="regemail" required="required"/>
        </div>
        <div class="form-group">
          <label for="regphone">Телефон</label>
          <input type="text" id="regphone" name="regphone" required="required"/>
        </div>
        <div class="form-group">
          <button type="submit">Зарегестрироваться</button>
        </div>
      </form>
      <?php
				if (($_SESSION["errMes"] ?? '') === ''); else {
					print_r($_SESSION["errMes"]);
          session_destroy();
				}
			?>
    </div>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <!-- <script src="../script/login.js"></script> -->

</body>
</html>
