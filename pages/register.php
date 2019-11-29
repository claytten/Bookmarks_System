<?php
  if(isset($_SESSION["errorMessage"])) {
?>
    <div style="padding: 7px 10px;
    background: #fff1f2;
    border: #ffd5da 1px solid;
    color: #d6001c;
    border-radius: 4px;
    margin: 30px 10px 10px 10px;"><?php echo $_SESSION["errorMessage"]; ?></div>
<?php
    unset($_SESSION["errorMessage"]);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="author" content="WahyuAjiSulaiman">

    <title>Register</title>

    <!-- vendor css -->
    <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

  </head>
  <body class="az-body">

    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <h1 class="az-logo"></h1>
        <div class="az-signin-header">
          <h2>Get Started</h2>
          <h4>It's free to signup and only takes a minute</h4>
          <form action="../action/register.php" method="POST" accept-charset="utf-8">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" placeholder="Enter your username" name="username">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" class="form-control" placeholder="Enter your fullname" name="name">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password" name="password" >
            </div><!-- form-group -->
            <button type="submit" class="btn btn-az-primary btn-block">Sign Up</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
          <p>have an account? <a href="../">Sign in</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>

    <script src="../assets/js/script.js"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>
