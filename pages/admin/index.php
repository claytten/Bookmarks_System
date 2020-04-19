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
    <link rel="apple-touch-icon" sizes="57x57" href="../../assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../../assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../../assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
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
            <a href="./index.php" class="nav-link active" >Overview</a>
            <a href="./history.php" class="nav-link " >History</a>
            <a href="./bookmarks.php" class="nav-link" >Bookmarks</a>
            <a href="./account_settings.php" class="nav-link" >Account Settings</a>
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
                <div class="az-content-label tx-13 mg-b-20">Traffic Details</div>

                <?php
                $query = "SELECT count(*) FROM users where roles='user'";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) {
                  ?>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Users</span>
                        <span><?php echo $row['count(*)']?> <span>(<?php echo $row['count(*)']?>%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar wd-20p" role="progressbar" style="width: <?php echo $row['count(*)']?>%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                  <?php
                }
                ?>
                
                <?php
                $query = "SELECT count(*) FROM history";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) {
                  ?>
                  <div class="az-traffic-detail-item">
                    <div>
                      <span>History</span>
                      <span><?php echo $row['count(*)']?> <span>(<?php echo $row['count(*)']?>%)</span></span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-success wd-15p" role="progressbar" style="width: <?php echo $row['count(*)']?>%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><!-- progress -->
                  </div>
                  <?php
                }
                ?>

                <?php
                $query = "SELECT count(*) FROM bookmarks";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) {
                  ?>
                  <div class="az-traffic-detail-item">
                    <div>
                      <span>Bookmarks</span>
                      <span><?php echo $row['count(*)']?> <span>(<?php echo $row['count(*)']?>%)</span></span>
                    </div>
                    <div class="progress">
                      <div class="progress-bar bg-pink wd-45p" role="progressbar" style="width: <?php echo $row['count(*)']?>%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                    </div><!-- progress -->
                  </div>
                  <?php
                }
                ?>

                <?php
                $query = "SELECT count(*) FROM users where roles='admin'";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) {
                  ?>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Admin</span>
                        <span><?php echo $row['count(*)']?> <span>(<?php echo $row['count(*)']?>%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-teal wd-25p" role="progressbar" style="width: <?php echo $row['count(*)']?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                  <?php
                }
                ?>
              </div><!-- col -->
              <!-- <div class="col-md-5 col-xl-4 mg-t-40 mg-md-t-0">
                
              </div><!-- col -->
            </div><!-- row -->

            <hr class="mg-y-40">

            <div class="mg-b-20"></div>

          </div><!-- az-profile-body -->
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->

    <?php include"../../layouts/admin/footer.php"?>
    <script type="text/javascript" src="../../lib/jquery/jquery-3.4.1.min.js"></script>
    <script src="../../assets/js/app.js"  type="text/javascript" charset="utf-8"  ></script>
  </body>
</html>
