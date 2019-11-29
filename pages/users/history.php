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

    <?php include"../../layouts/users/header.php"; include"../../layouts/users/navbar.php";?>

    <div class="az-content az-content-mail">
      <div class="container">
        <div class="az-content-body az-content-body-mail">
          <div style="padding-left:20px; display:flex">
            <h2>History</h2>
            <div class="az-header-center" style="margin-right:0">
              <input type="search" class="form-control" placeholder="Search for History">
              <button class="btn"><i class="fas fa-search"></i></button>
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
              <a href="../../action/users/delete_history?id=checkbox[]" title="">
                <button class="btn btn-light disabled"><i class="typcn typcn-trash"></i></button>
              </a>
            </div><!-- btn-group -->
          </div><!-- az-mail-options -->

          <div class="az-mail-list">
            <?php
              $id_user = $_SESSION['id_user'];
              $query = "SELECT * from history WHERE id_user='$id_user';";
              $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
              while ($row = mysqli_fetch_array($result))
              { 
                if($row > 0) {
                ?>
                <div class="az-mail-item unread">
                  <div class="az-mail-checkbox">
                    <label class="ckbox">
                      <input type="checkbox" name="ids[]" value="<?php echo $row['id']?>">
                      <span></span>
                    </label>
                  </div><!-- az-mail-checkbox -->

                  <?php include"../../action/star_condition.php" ?>

                  <div class="az-img-user"><img src="<?php echo $row['avatar']?>" alt=""></div>
                  <div class="az-mail-body">
                    <div class="az-mail-from"><?php echo date('d-m-Y', strtotime($row['date']) ) ?></div>
                    <a href="<?php echo $row['url']?>" target="_blank" title="">
                      <div class="az-mail-subject">
                      <strong><?php echo $row['name_github']?></strong><br>
                      <span><?php echo $row['url']?></span>
                    </div>
                    </a>
                  </div><!-- az-mail-body -->
                  <div class="az-mail-attachment"></div>
                  <div class="az-mail-date"><?php echo date('H:i', strtotime($row['date']) ) ?></div>
                </div><!-- az-mail-item -->
                <?php
                }
              }
            ?>
          </div><!-- az-mail-list -->

          <div class="mg-lg-b-30"></div>

        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->

    <?php 
      include"../../layouts/users/modal_bookmark.php";
      include"../../layouts/users/footer.php";
    ?>

    <script src="../../assets/js/app.js"  type="text/javascript" charset="utf-8" async defer></script>
    <script src="../../assets/js/search_github_front.js" type="text/javascript" charset="utf-8" async defer></script>
    <script>
      $(function(){
        'use strict'

        // showing modal with effect
        $('.modal-effect').on('click', function(e){
          e.preventDefault();
          var effect = $(this).attr('data-effect');
          $('#modaldemo1').addClass(effect);
        });

        // hide modal with effect
        $('#modaldemo8').on('hidden.bs.modal', function (e) {
          $(this).removeClass (function (index, className) {
              return (className.match (/(^|\s)effect-\S+/g) || []).join(' ');
          });
        });
      });
    </script>
  </body>
</html>
