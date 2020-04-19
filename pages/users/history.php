<?php
include "../../action/auth_users.php";
include "../../action/koneksi.php";

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

    <title>History</title>

    <!-- vendor css -->
    <link href="../../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- style CSS -->
    <link rel="stylesheet" href="../../assets/css/user.css">

  </head>
  <body class="az-body">

    <?php include"../../layouts/users/header.php"; include"../../layouts/users/navbar.php";?>

    <div class="az-content az-content-mail">
      <div class="container">
        <div class="az-content-body az-content-body-mail">
          <div style="padding-left:20px; display:flex">
            <h2>History</h2>
            <div class="az-header-center" style="margin-right:0">
              <input type="text" class="form-control" placeholder="Search for History name/date/url" name='search_history' id="search_history">
            </div><!-- az-header-center -->
          </div>
          <div class="az-mail-options">
            <label class="ckbox">
              <input id="checkAll" type="checkbox">
              <span></span>
            </label>
            <div class="btn-group">
              <a href="./history.php" title="">
                <button class="btn btn-light"><i class="typcn typcn-arrow-sync"></i></button>
              </a>
              <!-- <button class="btn btn-light disabled"><i class="typcn typcn-archive"></i></button> -->
              <!-- <button class="btn btn-light disabled"><i class="typcn typcn-info-outline"></i></button> -->
              <button class="btn btn-light" id="checks"><i class="typcn typcn-trash"></i></button>
            </div><!-- btn-group -->
          </div><!-- az-mail-options -->

          <div class="az-mail-list" id="historyy">
          </div><!-- az-mail-list -->

          <div class="mg-lg-b-30"></div>

        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->
    <?php 
      include"../../layouts/users/footer.php";
    ?>

    <script src="../../assets/js/search_github_front.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../assets/js/histories.js" type="text/javascript" charset="utf-8" defer></script>
    <script src="../../lib/select2/js/select2.min.js"></script>
  </body>
</html>
