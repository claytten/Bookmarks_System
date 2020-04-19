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

$getIdUser = $_GET['id'];

$query1 = "SELECT * FROM users WHERE id='$getIdUser';";
$result1 = mysqli_query($connect, $query1) or die(mysqli_error($connect));
while ($row1 = mysqli_fetch_array($result1))
{ 
  $getNameUser = $row1['name'];
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

    <title>Bookmarks</title>

    <!-- vendor css -->
    <link href="../../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../../lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">

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
            <a href="./index.php" class="nav-link " >Overview</a>
            <a href="./history.php" class="nav-link " >History</a>
            <a href="./bookmarks.php" class="nav-link active" >Bookmarks</a>
            <a href="./account_settings.php" class="nav-link" >Account Settings</a>
          </nav>

          <div class="az-profile-body">
            <h4>
            <a href="./bookmarks.php" style="color:black"><i class="fas fa-arrow-left"></i></a>
            Management Account Bookmark <?php echo $getNameUser ?>
            </h4>
            <table id="datatable1" class="display responsive nowrap">
            <thead>
                <tr>
                  <th class="wd-15p">No</th>
                  <th class="wd-15p">Name Bookmark</th>
                  <th class="wd-15p">Avatar</th>
                  <th class="wd-15p">Directory</th>
                  <th class="wd-15p">Date</th>
                  <th class="wd-15p">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $query = "SELECT * FROM bookmarks WHERE id_user='$getIdUser'";
              $result = mysqli_query($connect, $query);
              $no = 1;
              while ($row = mysqli_fetch_array($result)) {
              ?>
                <tr>
                  <td><?php echo $no?></td>
                  <td>
                      <a href="<?php echo $row['url']?>" target="_blank">
                        <?php echo $row['name_github']?>
                      </a>
                  </td>
                  <td>
                      <a href="<?php echo $row['avatar']?>" target="_blank">
                        <i class="fas fa-images"></i>
                      </a>
                  </td>
                  <td>/</td>
                  <td><?php echo $row['date']?></td>
                  <td>
                      <a href="../../action/admin/delete_bookmark.php?id=<?php echo $row['id']?>&id_user=<?php echo $getIdUser ?>">
                        <i class="fas fa-trash"></i>
                      </a>
                  </td>
                </tr>
              <?php
              $no++;
              }
              ?>
              </tbody>
            </table>
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
    <script src="../../lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="../../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="../../lib/select2/js/select2.min.js"></script>
    <script>
      $(document).ready(function(){
        'use strict';

        $('#datatable1').DataTable({
          responsive: true
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>
</html>
