<?php
if($row['status'] == 0) {
  ?>
    <a href="" title="" data-toggle="modal" data-target="#modaldemo1" class="modal-effect" data-effect="effect-super-scaled">
      <div class="az-mail-star">
      <i class="typcn typcn-star"></i>
      </div><!-- az-mail-star -->
    </a>
  <?php
} else {
  ?>
    <div class="az-mail-star active">
      <i class="typcn typcn-star"></i>
    </div><!-- az-mail-star -->
  <?php
}
?>