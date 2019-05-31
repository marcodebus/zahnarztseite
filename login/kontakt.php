<?php 
include ('../con.php');
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
               Kontaktformular Einstellungen
            </div>
            <div class="card-body">
                <form id="menue">
                    <!-- Password input-->
					
					
                    <div class="form-group">
                        <label>
                           Überschrift
                        </label>
                        <input name="headline" type="text" value="<?php echo $Text[17];?>" class="form-control">
                    </div>
					<br><br>
                    <!-- Password input-->
                    <div class="form-group">
                        <label>
                          <b>Unterüberschriften</b><br><br>
                        </label>
                        <input name="ueber1" type="text" value="<?php echo $Text[18];?>" class="form-control">
                        <input name="ueber2" value="<?php echo $Text[19];?>" type="text" class="form-control">
                    </div>
					<br><br>
					<b>Formularfelder</b>
                    <div class="form-group">
                        <label>Name
                        </label>
                        <input name="team" type="text" value="<?php echo $Text[20];?>" class="form-control">
                    </div>
					
					
					
					
					      <div class="form-group">
                        <label>
<?php echo 'Datum';?>
                        </label>
                        <input name="datum" value="<?php echo $Text[21];?>" type="text" class="form-control">
                    </div>
							
				<div class="form-group">
                        <label>
<?php echo 'Bestellart:';?>
                        </label>
                        <input name="art" value="<?php echo $Text[22];?>" type="text" class="form-control">
                    </div>
					
					                    <div class="form-group">
                        <label>
<?php echo 'Email';?>
                        </label>
                        <input name="email" value="<?php echo $Text[23];?>" type="text" class="form-control">
                    </div>
							
<div class="form-group">
                        <label>
<?php echo 'Personen Anzahl';?>
                        </label>
                        <input name="anzahl" value="<?php echo $Text[24];?>" type="text" class="form-control">
                    </div>		
							
							
			<div class="form-group">
                        <label>
<?php echo 'Zeit';?>
                        </label>
                        <input name="gal" value="<?php echo $Text[25];?>" type="text" class="form-control">
                    </div>				
							
							
							<div class="form-group">
                        <label>
<?php echo "Besondere Ereignisse Geburtstag, Trauer...";?>
                        </label>
                        <input name="event" value="<?php echo $Text[26];?>" type="text" class="form-control">
                    </div>
							
		<div class="form-group">
                        <label>
<?php echo "Tisch Reservieren Button";?>
                        </label>
                        <input name="btn" value="<?php echo $Text[27];?>" type="text" class="form-control">

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



