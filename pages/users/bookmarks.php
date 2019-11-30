<?php
include "../../action/auth_users.php";
include"../../action/koneksi.php";
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
          </div>
          <div class="az-mail-options">
            <label class="ckbox">
            </label>
            <div class="btn-group">
              <a href="./bookmarks.php" title="">
                <button class="btn btn-light"><i class="typcn typcn-arrow-sync"></i></button>
              </a>
              <a href="" title="" data-toggle="modal" data-target="#modaldemo1" class="modal-effect" data-effect="effect-super-scaled">
                <button class="btn btn-light"><i class="typcn typcn-arrow-down-outline"></i></button>
              </a>
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

    <div id="modaldemo1" class="modal">
      <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
          <div class="modal-header">
            <h6 class="modal-title">New Folder</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="../../action/users/add_folder.php" method="POST" accept-charset="utf-8">
            <div class="modal-body">
              <div class="m-b-20">
                <input class="form-control" placeholder="Input box" type="text">
              </div>
              <div>
                <select class="form-control select2">
                  <?php
                  $query = "SELECT * from directories;";
                  $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                  while ($row = mysqli_fetch_array($result))
                  { 
                    ?>
                    <option value="<?php echo $row['id']?>"></option>
                    <?php
                  }
                  ?>
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-indigo" id="saved">Save changes</button>
              <button type="button" class="btn btn-outline-light" id="closed" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <?php include"../../layouts/users/footer.php"?>
    <script src="../lib/select2/js/select2.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
  </body>
</html>
