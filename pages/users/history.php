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
              <a href="../../action/users/delete_history?id=checkbox[]" title="">
                <button class="btn btn-light disabled"><i class="typcn typcn-trash"></i></button>
              </a>
            </div><!-- btn-group -->
          </div><!-- az-mail-options -->

          <div class="az-mail-list" id="historyy">
          </div><!-- az-mail-list -->

          <div class="mg-lg-b-30"></div>

        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->

    <?php 
      include"../../layouts/users/modal_bookmark.php";
      include"../../layouts/users/footer.php";
    ?>

    <script src="../../assets/js/search_github_front.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
      $(function(){
        'use strict'
        function load_data(query){
          $.ajax({
           url:"../../action/users/search/history.php",
           method:"POST",
           data:{
            query:query
            },
           success:function(data)
           {
            $('#historyy').html(data);
           }
          });
        }
        load_data();
       $("#search_history").keyup(function() {
           var search = $(this).val();
           console.log(search);
           if (search != '') {
               load_data(search);
           }
           else {
               load_data();
           }
       });
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
