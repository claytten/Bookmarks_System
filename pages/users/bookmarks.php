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
              <button class="btn btn-light" id="checks"><i class="typcn typcn-trash"></i></button>
              <!-- <button class="btn btn-light disabled"><i class="typcn typcn-folder"></i></button> -->
              <button class="btn btn-light"><i class="typcn typcn-edit"></i></button>
            </div><!-- btn-group -->
          </div><!-- az-mail-options -->
        <?php
        $query1 = "SELECT * FROM bookmarks";
        $query2 = "SELECT * FROM directories";
        $result1 = mysqli_query($connect, $query1);
        $result2 = mysqli_query($connect,$query2);
        if(mysqli_num_rows($result1) > 0) {
          while ($row = mysqli_fetch_array($result1)) {
              if( $row['id_directory'] != "/") {
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
                                  <label class="ckbox">
                                    <input type="checkbox" name="ids2[]" value="<?php echo $row2['id']?>>
                                    <span></span>
                                  </label>
                                </div><!-- az-mail-checkbox -->
                                <div class="az-img-user"><i class="typcn typcn-folder" style="font-size:23px"></i></div>
                                <div class="az-mail-body">
                                  <div class="az-mail-subject caret">
                                    <strong><?php echo $row1['folder'] ?></strong>
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
                                  <input type="checkbox" name="ids1[]" value="<?php echo $row1['id']?>">
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
                  </div><!-- az-content-body -->
                <?php
              } else {
                ?>
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
                <?php
              }
          }
        } else {
          while($row1 = mysqli_fetch_array($result2)) {
            if (mysqli_num_rows($result2) > 0 && $row1['folder'] != "/") {
              ?>
                <div class="az-mail-item unread">
                  <div class="az-mail-checkbox">
                    <label class="ckbox">
                      <input type="checkbox" name="ids2[]" value="<?php echo $row1['id']?>">
                      <span></span>
                    </label>
                  </div><!-- az-mail-checkbox -->
                  <div class="az-img-user"><i class="typcn typcn-folder" style="font-size:23px"></i></div>
                  <div class="az-mail-body">
                    <div class="az-mail-subject caret">
                      <strong><?php echo $row1['folder'] ?></strong>
                    </div>
                  </div><!-- az-mail-body -->
                </div><!-- az-mail-item -->
              <?php
            }
          }
          
        }
        ?>
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
                <input class="form-control" placeholder="Input folder" type="text" name="folder">
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-indigo" id="saved">Save</button>
              <button type="button" class="btn btn-outline-light" id="closed" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <?php include"../../layouts/users/footer.php"?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
    $('#checks').on('click', function(e) {
      var checkboxes1 = document.getElementsByName('ids1[]');
      var checkboxes2 = document.getElementsByName('ids2[]');
      var selected1 = [];
      var selected2 = [];
      for (var i=0; i<checkboxes1.length; i++) {
          if (checkboxes1[i].checked) {
            selected1.push(checkboxes1[i].value);
          }
      }
      for (var i=0; i<checkboxes2.length; i++) {
          if (checkboxes2[i].checked) {
            selected2.push(checkboxes2[i].value);
          }
      }
      if(selected1 != "" || selected2 != "") {
        $.ajax({
         url:"../../action/users/delete_bookmark.php",
         method:"POST",
         data:{
          selected1:selected1,
          selected2:selected2
         },
         success:function(data)
        {
          if(data == true) {
            window.location.reload("./bookmarks.php")
          }
         }
        });
      }
    });
    </script>
    
  </body>
</html>
