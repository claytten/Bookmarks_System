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

    <title>Login</title>

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
          <h2>Welcome back!</h2>
          <h4>Please sign in to continue</h4>

          <form action="action/login.php" method="POST" accept-charset="utf-8">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" placeholder="Enter your username" name="username">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div><!-- form-group -->
            <button  type="submit" class="btn btn-az-primary btn-block">Sign In</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
          <p>Don't have an account? <a href="pages/register.php">Create an Account</a></p>
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
