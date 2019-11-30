<?php
include "../../action/auth_users.php";
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

    <!-- style CSS -->
    <link rel="stylesheet" href="../../assets/css/user.css">

  </head>
  <body class="az-body">

    <?php include"../../layouts/users/header.php"; include"../../layouts/users/navbar.php";?>

    <div class="az-content az-content-mail">
      <div class="container">
        <div class="az-content-body az-content-body-mail treeview">
          <div style="padding-left:20px; display:flex">
            <h2>Bookmarks</h2>
            <div class="az-header-center" style="margin-right:0">
              <input type="search" class="form-control" placeholder="Search for Bookmarks">
              <button class="btn"><i class="fas fa-search"></i></button>
            </div><!-- az-header-center -->
          </div>
          <div class="az-mail-options">
            <label class="ckbox">
            </label>
            <div class="btn-group">
              <button class="btn btn-light"><i class="typcn typcn-arrow-sync"></i></button>
              <button class="btn btn-light"><i class="typcn typcn-arrow-down-outline"></i></button>
              <!-- <button class="btn btn-light disabled"><i class="typcn typcn-info-outline"></i></button> -->
              <button class="btn btn-light disabled"><i class="typcn typcn-trash"></i></button>
              <!-- <button class="btn btn-light disabled"><i class="typcn typcn-folder"></i></button> -->
              <button class="btn btn-light disabled"><i class="typcn typcn-edit"></i></button>
            </div><!-- btn-group -->
          </div><!-- az-mail-options -->
        <div class="az-mail-list treeview-animated">
          <ul class="treeview-animated-list" style="list-style-type: none; padding-left: 0">
            <li class="treeview-animated-items">
              <div class="az-mail-item unread">
                <div class="az-mail-checkbox">
                  <label class="ckbox">
                    <input type="checkbox">
                    <span></span>
                  </label>
                </div><!-- az-mail-checkbox -->
                <div class="az-img-user"><i class="typcn typcn-folder" style="font-size:23px"></i></div>
                <div class="az-mail-body">
                  <div class="az-mail-from">19-07-2019</div>
                  <div class="az-mail-subject caret">
                    <strong>Folder</strong>
                  </div>
                </div><!-- az-mail-body -->
                <div class="az-mail-date">06:50am</div>
              </div><!-- az-mail-item -->

              <ul class="nested" style="list-style-type: none">
                <li>
                  <div class="az-mail-item unread">
                    <div class="az-mail-checkbox">
                      <label class="ckbox">
                        <input type="checkbox">
                        <span></span>
                      </label>
                    </div><!-- az-mail-checkbox -->
                    <div class="az-img-user"><i class="typcn typcn-folder" style="font-size:23px"></i></div>
                    <div class="az-mail-body closed">
                      <div class="az-mail-from">19-07-2019</div>
                      <div class="az-mail-subject caret">
                        <strong>Subfolder</strong>
                      </div>
                    </div><!-- az-mail-body -->
                    <div class="az-mail-date">06:50am</div>
                  </div><!-- az-mail-item -->

                  <ul class="nested" style="list-style-type: none">
                    <li>
                      <div class="az-mail-item unread">
                        <div class="az-mail-checkbox">
                          <label class="ckbox">
                            <input type="checkbox">
                            <span></span>
                          </label>
                        </div><!-- az-mail-checkbox -->
                        <div class="az-img-user">
                          <div class="az-img-user">
                            <img src="https://via.placeholder.com/500x500" alt="">
                          </div><!-- az-img-user -->
                        </div>
                        <div class="az-mail-body closed">
                          <div class="az-mail-from">19-10-2019</div>
                          <div class="az-mail-subject caret">
                            <strong>Document 1</strong>
                            <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor...</span>
                          </div>
                        </div><!-- az-mail-body -->
                        <div class="az-mail-date">Yesterday</div>
                      </div><!-- az-mail-item -->
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <div class="az-mail-item unread">
              <div class="az-mail-checkbox">
                <label class="ckbox">
                  <input type="checkbox">
                  <span></span>
                </label>
              </div><!-- az-mail-checkbox -->
              <div class="az-img-user">
                <div class="az-img-user">
                  <img src="https://via.placeholder.com/500x500" alt="">
                </div><!-- az-img-user -->
              </div>
              <div class="az-mail-body closed">
                <div class="az-mail-from">19-10-2019</div>
                <div class="az-mail-subject caret">
                  <strong>Document 1</strong>
                  <span>enean commodo li gula eget dolor cum socia eget dolor enean commodo li gula eget dolor cum socia eget dolor...</span>
                </div>
              </div><!-- az-mail-body -->
              <div class="az-mail-date">Yesterday</div>
            </div><!-- az-mail-item -->
          </ul>
        </div><!-- az-content-body -->
      </div><!-- container -->
    </div><!-- az-content -->

    <?php include"../../layouts/users/footer.php"?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../../assets/js/app.js"  type="text/javascript" charset="utf-8"  ></script>
    
  </body>
</html>
