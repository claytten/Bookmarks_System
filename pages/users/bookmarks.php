<?php
include "../../action/auth_users.php";
include"../../action/koneksi.php";
$id_user = $_SESSION['id_user'];
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
              <input id="checkAll" type="checkbox">
              <span></span>
            </label>
            <div class="btn-group">
              <a href="./bookmarks.php" title="">
                <button class="btn btn-light"><i class="typcn typcn-arrow-sync"></i></button>
              </a>
              <!-- <button class="btn btn-light disabled"><i class="typcn typcn-info-outline"></i></button> -->
              <button class="btn btn-light" id="checks"><i class="typcn typcn-trash"></i></button>
              <!-- <button class="btn btn-light disabled"><i class="typcn typcn-folder"></i></button> -->
              <button class="btn btn-light" id="edits"><i class="typcn typcn-edit"></i></button>
            </div><!-- btn-group -->
          </div><!-- az-mail-options -->
        <?php
        $query1 = "SELECT * FROM bookmarks WHERE id_user='$id_user'";
        $query2 = "SELECT * FROM directories";
        $result1 = mysqli_query($connect, $query1);
        $result2 = mysqli_query($connect,$query2);
        if(mysqli_num_rows($result1) > 0) {
          while ($row = mysqli_fetch_array($result1)) {
              if( $row['id_directory'] == 2) {
                ?>
                  <div class="az-mail-list treeview-animated">
                    <ul class="treeview-animated-list" style="list-style-type: none; padding-left: 0">
                      <li class="treeview-animated-items">
                        <?php
                        while($row1 = mysqli_fetch_array($result2)) {
                          if ($row['id_directory'] == $row1['id']) {
                            ?>
                              <div class="az-mail-item unread">
                                <div class="az-mail-checkbox">
                                </div><!-- az-mail-checkbox -->
                                <div class="az-img-user"><i class="typcn typcn-folder" style="font-size:23px"></i></div>
                                <div class="az-mail-body">
                                  <div class="az-mail-subject caret">
                                    <strong><?php echo str_replace("_", " ", $row1['folder']) ?></strong>
                                  </div>
                                </div><!-- az-mail-body -->
                              </div><!-- az-mail-item -->
                            <?php
                          }
                        }
                        ?>
                        
                        <ul class="nested" style="list-style-type: none">
                          <li>
                            <div class="az-mail-item unread">
                              <div class="az-mail-checkbox">
                                <label class="ckbox">
                                  <input type="checkbox" name="ids[]" value="<?php echo $row['id']?>" id="get__checkbox">
                                  <span></span>
                                </label>
                              </div><!-- az-mail-checkbox -->
                              <input type="hidden" name="star" value="<?php echo $row['star'] ?>">
                              <div class="az-img-user">
                                <div class="az-img-user">
                                  <img src="<?php echo $row['avatar']?>" alt="">
                                </div><!-- az-img-user -->
                              </div>
                              <div class="az-mail-body closed">
                                <div class="az-mail-from"><?php echo date('d-m-Y', strtotime($row['date']) )?></div>
                                <div class="az-mail-subject caret">
                                  <a href="<?php echo $row['url']?>" target="_blank" title="">
                                    <div class="az-mail-subject">
                                    <strong><?php echo $row['name_github']?>'</strong><br>
                                    <span><?php echo $row['url']?></span>
                                  </div>
                                  </a>
                                </div>
                              </div><!-- az-mail-body -->
                              <div class="az-mail-date"><?php echo date('H:i', strtotime($row['date']) )?></div>
                            </div><!-- az-mail-item -->
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- az-content-body -->
                <?php
              } 
          }
        } else {
          ?>
          <div class="az-mail-item unread">
            <div class="az-mail-body">
              <div class="az-mail-subject caret">
                <strong>Data Not Found</strong>
              </div>
            </div><!-- az-mail-body -->
          </div><!-- az-mail-item -->
          <?php
        }
        ?>
      </div><!-- container -->
    </div><!-- az-content -->

    <?php include"../../layouts/users/footer.php"?>
    <script src="../../assets/js/search_github_front.js" type="text/javascript" charset="utf-8" async defer></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../../assets/js/bookmarks.js" type="text/javascript" charset="utf-8" defer></script>
    
  </body>
</html>
