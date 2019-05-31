<?php 
include 'templates/header.php';

$currentUser = app('current_user');
?>

<div class="row">
    <?php
        $sidebarActive = 'statistik';
        require 'templates/sidebar.php';
    ?>

    <div class="col-md-9 col-lg-10">

        <?php if (! $currentUser->is_admin) : ?>
            <div class="alert alert-warning">
                <strong><?= trans('note') ?>! </strong>
                <?= trans('to_change_email_username') ?>
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header">
                Datei Manager
            </div>
            <div class="card-body">
				
				
<iframe src="https://ads.google.com/aw/overview?ocid=74190644&__c=3062276756&authuser=0&__u=5609194796" width="100%" height="600px">

			
               
            </div>
        </div>

     
    </div>
</div>


    <script src="assets/js/vendor/sha512.js"></script>
    <?php include 'templates/footer.php'; ?>
    <script src="assets/js/app/profile.js"></script>
  </body>
</html>




