<div class="az-header az-header-mail">
  <div class="container">
    <div class="az-header-left">
      <a href="../../" class="az-logo"><?php echo $_SESSION['name']?></a>
      <a href="" id="azNavShow" class="az-header-menu-icon d-lg-none"><span></span></a>
      <a href="" id="azContentBodyHide" class="az-header-arrow d-md-none"><i class="icon ion-md-arrow-back"></i></a>
    </div><!-- az-header-left -->
    <div class="az-header-center">
      
    </div><!-- az-header-center -->
    <div class="az-header-right">
      <div class="dropdown az-profile-menu">
        <a href="" class="az-img-user"><img src="https://via.placeholder.com/500x500" alt=""></a>
        <div class="dropdown-menu">
          <div class="az-dropdown-header d-sm-none">
            <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
          </div>
          <div class="az-header-profile">
            <div class="az-img-user">
              <img src="https://via.placeholder.com/500x500" alt="">
            </div><!-- az-img-user -->
            <h6><?php echo $_SESSION['name']?></h6>
          </div><!-- az-header-profile -->
          <a href="./new_account.php" class="dropdown-item"><i class="typcn typcn-plus-outline"></i> New Account</a>
          <a href="./profile.php" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
          <a href="../../action/logout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
        </div><!-- dropdown-menu -->
      </div>
    </div><!-- az-header-right -->
  </div><!-- container -->
</div><!-- az-header -->