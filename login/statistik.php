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

        

        <div class="card">
            <div class="card-header">
                Statistik Manager:
            </div>
            <div class="card-body">
				
				
<iframe src="https://zahnarzt-fuchs-alzenau.de/login/statistik/321%20Analytics/de#traffic" width="100%" height="600px">

			
               
            </div>
        </div>

     
    </div>
</div>


    <script src="assets/js/vendor/sha512.js"></script>
    <?php include 'templates/footer.php'; ?>
    <script src="assets/js/app/profile.js"></script>
  </body>
</html>



