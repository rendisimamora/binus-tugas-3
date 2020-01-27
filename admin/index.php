<html>
<?php 
session_start();
if($_SESSION['status']!="login"){
  header("location:../index.php");
}
?>

<head>
  <title>Web Programming - Book Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/color.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/layer.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/font.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="navbar grey">
      <div class="container">
        <div class="item--flex flex--space-between">
          <div class="item__logo">
            <img class="image__logo" src="../assets/image/logo-binus.png" alt="Logo Binus" />
          </div>
          <div class="item__nav">
            <ul class="nav pa-3">
              <li class="nav-item mr-3">
                <a class="nav-item-anchor primary--text font-weight-bold" href='#'>Home</a>
              </li>
              <li class="nav-item mr-3">
                <a class="nav-item-anchor primary--text font-weight-bold" href='#'>About</a>
              </li>
              <li class="nav-item">
                <a class="nav-item-anchor primary--text font-weight-bold" href='../action/logout.php'>Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="section__header container">
      <h3>Welcome to dashboard.</h3>
      <p>Hi <?php echo $_SESSION['username']?>, Welcome back</p>
    </div>
  </div>
</body>