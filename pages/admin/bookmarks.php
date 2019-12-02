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
            <table id="datatable1" class="display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Username</th>
                  <th class="wd-15p">Count Bookmarks</th>
                  <th class="wd-15p">Show History</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $query = "SELECT users.username,count(DISTINCT bookmarks.id) AS bookmarks FROM users INNER JOIN history ON users.id = history.id_user INNER JOIN bookmarks ON bookmarks.star = history.id GROUP BY users.id;";
              $result = mysqli_query($connect, $query);
              while ($row = mysqli_fetch_array($result)) {
              ?>
                <tr>
                  <td><?php echo $row['username']?></td>
                  <td><?php echo $row['bookmarks']?></td>
                  <td><a href="" title=""><i class="fa fa-eye"></i></a></td>
                </tr>
              <?php
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
