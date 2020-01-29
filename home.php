<?php include("config.php"); ?>
<?php include("masuk.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" id="tambahdata">Daftar Baru</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pendaftar">Pendaftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="cetak">Cetak</a></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="text-right float-sm-right ">
                <a href="logout.php" class="nav-link"><b>Logout (<?php echo $_SESSION['username']; ?> || <?php echo $_SESSION['level']; ?>)</b></a>
            </li>
        </ul>
    </nav>
    <!-- Jadiin Jumbotron -->
    <div class="jumbotron text-center">
        <h1 id="jumbotron">SMK Coding</h1>
    </div>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>

<div id="content"></div>
<?php include("modal.php"); ?>

<script>
</script>
</body>
</html>