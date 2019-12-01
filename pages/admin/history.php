<?php
include "../../action/auth_admin.php";
include "../../action/koneksi.php";

$id_user = $_SESSION['id_user'];
$query = "SELECT * from users WHERE id='$id_user';";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
while ($row = mysqli_fetch_array($result))
{ 
  $name = $row['name'];
  $roles = $row['roles'];
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

    <title>Home</title>

    <!-- vendor css -->
    <link href="../../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- style CSS -->
    <link rel="stylesheet" href="../../assets/css/user.css">

  </head>
  <body class="az-body">

    <?php include"../../layouts/admin/header.php"; ?>

    <div class="az-content az-content-profile">
      <div class="container mn-ht-100p">
        <div class="az-content-left az-content-left-profile">

          <div class="az-profile-overview">
            <div class="az-img-user">
              <img src="https://via.placeholder.com/500x500" alt="">
            </div><!-- az-img-user -->
            <div class="d-flex justify-content-between mg-b-20">
              <div>
                <h5 class="az-profile-name"><?php echo $name?></h5>
                <p class="az-profile-name-text"><?php echo $roles?></p>
              </div>
            </div>

          </div><!-- az-profile-overview -->

        </div><!-- az-content-left -->
        <div class="az-content-body az-content-body-profile">
          <nav class="nav az-nav-line">
            <a href="../../" class="nav-link " data-toggle="tab">Overview</a>
            <a href="./history.php" class="nav-link active" data-toggle="tab">History</a>
            <a href="" class="nav-link" data-toggle="tab">Bookmarks</a>
            <a href="" class="nav-link" data-toggle="tab">Account Settings</a>
          </nav>

          <div class="az-profile-body">
            <?php
            $query = "SELECT * FROM bookmarks";
            $result = mysqli_query($connect, $query1);
            ?>

            <?php
            ?>
            <div class="row mg-b-20">
              <div class="col-md-7 col-xl-8">
                
              </div><!-- col -->
              <!-- <div class="col-md-5 col-xl-4 mg-t-40 mg-md-t-0">
                
              </div><!-- col -->
            </div><!-- row -->

            <div class="mg-b-20"></div>

          </div><!-- az-profile-body -->
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->

    <?php include"../../layouts/admin/footer.php"?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../../assets/js/app.js"  type="text/javascript" charset="utf-8"  ></script>
    <script src="../lib/chart.js/Chart.bundle.min.js"></script>
  </body>
</html>
