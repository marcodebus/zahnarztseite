<?php 
include ('con.php');
include ('selectTexte.php');
include 'templates/header.php';

$currentUser = app('current_user');
?>

<div class="row">
    <?php
        $sidebarActive = 'seiten';
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
               Stammdaten Einstellungen
            </div>
            <div class="card-body">
                <form id="menue">
                    <!-- Password input-->
					
					
                    <div class="form-group">
                        <label>
                           Adresse
                        </label>
                        <input name="headline" type="text" value="<?php echo $Text[37];?>" class="form-control">
                    </div>
					<br>
                    <!-- Password input-->
                    <div class="form-group">
                        <label>
                          Telefon Nr.<br><br>
                        </label>
                        <input name="tel" type="text" value="<?php echo $Text[38];?>" class="form-control">
                        
                    </div>
					
                    <div class="form-group">
                        <label>Email
                        </label>
                        <input name="team" type="text" value="<?php echo $Text[39];?>" class="form-control">
                    </div>
					
					
					
					<b>Öffnungszeiten</b>
					      <div class="form-group">
                        <label>
<?php echo 'Öffnungszeiten Zeile 1';?>
                        </label>
                        <input name="oz1" value="<?php echo $Text[41];?>" type="text" class="form-control">
                    </div>
							
				<div class="form-group">
                        <label>
<?php echo 'Öffnungszeiten Zeile 2';?>
                        </label>
                        <input name="oz2" value="<?php echo $Text[42];?>" type="text" class="form-control">
                    </div>
										      <div class="form-group">
                        <label>
<?php echo 'Öffnungszeiten Zeile 3';?>
                        </label>
                        <input name="oz3" value="<?php echo $Text[43];?>" type="text" class="form-control">
                    </div>
							
				<div class="form-group">
                        <label>
<?php echo 'Öffnungszeiten Zeile 4';?>
                        </label>
                        <input name="oz4" value="<?php echo $Text[44];?>" type="text" class="form-control">
                    </div>
					
					                    <div class="form-group">
                        <label>
<?php echo 'Copyright';?>
                        </label>
                        <input name="email" value="<?php echo $Text[46];?>" type="text" class="form-control">
                    </div>
							

                    <button id="menu" type="submit" class="btn btn-primary">
                       
						
						Aktualisieren
                    </button>
                </form>
            </div>
        </div>

        
    </div>
</div>


    <script src="assets/js/vendor/sha512.js"></script>
    <?php include 'templates/footer.php'; ?>
    <script src="assets/js/app/profile.js"></script>
  </body>
</html>




