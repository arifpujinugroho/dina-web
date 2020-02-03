<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body> 
  <?php
    if (isset($_get['pesan'])) {
      if($_get['pesan']=="gagal"){
        echo "<div class='alert'> Username dan Password tidak sesuai ! </div>";
      }
    }
    ?>

    <div class="kotak_login">
      <p class="tulisan_login">Silahkan login</p>

      <form action="cek_login.php" method="post">
        <label>Username</label>
        <input type="text" name="username" class="form_login form-control" placeholder="Username..." required="required">

        <label>Password</label>
        <input type="password" name="password" class="form_login form-control" placeholder="Password..." required="required">

        <input type="submit" class="tombol_login" value="LOGIN">

      </form>
    </div>
  </body>
</html>
