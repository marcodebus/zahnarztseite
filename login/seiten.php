<?php 
include 'templates/header.php';

$currentUser = app('current_user');
?>

<div class="row">
    <?php
        $sidebarActive = 'seiten';
        require 'templates/sidebar.php';
    ?>

    <div class="col-md-9 col-lg-10">

        <!-- < ? php/* if (! $currentUser->//is_admin) : */?>
           div class="alert alert-warning">
                <strong><?///= trans('note') ?>! </strong>
                <?///= trans('to_change_email_username') ?>
            </div>-->
        <?php //endif; ?>

        <div class="card">
            <div class="card-header">
                Bereich auswählen:
            </div>
            <div class="card-body">
				
				
				<a href="start.php"><button id="update_details" style="width:100%;"type="submit" class="btn btn-primary">
                        Menüband
					</button></a><br><br>
				<a href="headlines.php"><button id="update_details" style="width:100%;" type="submit" class="btn btn-primary">
                        Unter-Überschriften zu den einzlen Bereichen
					</button></a><br><br>
				<a href="kontakt.php"><button id="update_details" style="width:100%;" type="submit" class="btn btn-primary">
                        Kontaktformular
					</button></a><br><br>
				<a href="stammdaten.php"><button id="update_details" style="width:100%;" type="submit" class="btn btn-primary">
                        Stammdaten
					</button></a><br><br>
				
				
				<a href="langtexte.php"><button id="update_details" style="width:100%;" type="submit" class="btn btn-primary">
                        Langtexte 
					</button></a><br><br>
			
               
            </div>
        </div>

     
    </div>
</div>


    <script src="assets/js/vendor/sha512.js"></script>
    <?php include 'templates/footer.php'; ?>
    <script src="assets/js/app/profile.js"></script>
  </body>
</html>

