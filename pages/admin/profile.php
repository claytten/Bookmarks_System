<?php
  include "../../action/auth_admin.php";
  include"../../action/koneksi.php";

  $id_user = $_SESSION['id_user'];
  $query = "SELECT * from users WHERE id='$id_user';";
  $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
  while ($row = mysqli_fetch_array($result))
  { 
    $username = $row['username'];
    $name = $row['name'];
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

    <title>Account Settings</title>

    <!-- vendor css -->
    <link href="../../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- style CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">

  </head>
  <body class="az-body">
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

    <?php include"../../layouts/admin/header.php";?>

    <div class="az-content az-content-mail">
      <div class="container" style="justify-content: center">
        <div class="az-card-signin">
          <h1 class="az-logo"></h1>
          <div class="az-signin-header">
            <h2>Account Settings</h2>
            <form action="../../action/users/update_user.php" method="POST" accept-charset="utf-8">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter your username" value="<?php echo $username ?>" required>
              </div><!-- form-group -->
              <div class="form-group">
                <label>Username Github</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your username github" value="<?php echo $name ?>" required>
              </div><!-- form-group -->
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
              </div><!-- form-group -->
              <button type="submit"  class="btn btn-az-primary btn-block">Update</button>
            </form>
          </div><!-- az-signin-header -->
          <div class="az-signin-footer">
          </div><!-- az-signin-footer -->
        </div><!-- az-card-signin -->
      </div><!-- container -->
    </div><!-- az-content -->

    <?php include"../../layouts/users/footer.php"?>
  </body>
</html>
