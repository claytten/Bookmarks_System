<?php
include "../../action/koneksi.php";
include "../../action/auth_users.php";

$filter = str_replace("'","", $_GET['name_github']);
$name_github = $filter;
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

    <div class="az-content az-content-mail center">
      <div class="container" style="justify-content: center">
        <div class="col-md-4 mg-t-20 mg-md-t-0">
          <div class="card bd-0">
            <div class="card-header tx-medium bd-0 tx-white bg-primary">
              <h4>Github Profile</h4>
            </div><!-- card-header -->
            <div class="card-body bd bd-t-0 az-profile-overview card-user">
              <div class="card__spinner"></div>
              <div class="az-img-user card_userr" style="margin-bottom:0">
                <img src="https://via.placeholder.com/500x500" alt="" class="card__img" id="card_img">
              </div><!-- az-img-user -->
              <p class="card__title" id="card_name"></p>
              <p class="card__desc"></p>
              <p class="card__temp"><b>Company: </b> <span></span></p>
              <p class="card__following"><b>Following: </b> <span></span></p>
              <p class="card__followers"><b>Followers: </b> <span></span></p>
              <p class="card__html_url" id="card_html"><b>Url: </b> <span></span></p>
              <div class="add__to-card">
                <?php
                if($name_github != "") {
                  ?>
                    <input type="text" class="form-control add__input" placeholder="Enter a github username" value="<?php echo $name_github?>" /> 
                    <button class="btn btn-az-secondary btn-block add__btn" >Submit</button>
                  <?php
                } else {

                  ?>
                    <input type="text" class="form-control add__input" placeholder="Enter a github username" /> 
                    <button class="btn btn-az-secondary btn-block add__btn" >Submit</button>
                  <?php
                }
                ?>
                
              </div>
            </div><!-- card-body -->
          </div><!-- card -->
        </div><!-- col -->
      </div><!-- container -->
    </div><!-- az-content -->

    <?php include"../../layouts/users/footer.php"?>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../../assets/js/app.js"  type="text/javascript" charset="utf-8"  ></script>
    
  </body>
</html>
