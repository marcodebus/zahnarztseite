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
               Titel, Überschriften und Unterüberschriften
            </div>
            <div class="card-body">
                <form id="menue">
                    <!-- Password input-->
					
					
                    <div class="form-group">
                        <label>
                           Titel (Nicht sichtbar SEO)
                        </label>
                        <input name="titel" type="text" value="<?php echo $Text[0];?>" class="form-control">
                    </div>
					<br><br>
                    <!-- Password input-->
                    <div class="form-group">
                        <label>
                          <b>Oberer Teil (Animation)</b><br><br>
                        </label>
                        <input name="animation1" type="text" value="<?php echo $Text[1];?>" class="form-control">
                        <input name="animation2" value="<?php echo $Text[2];?>" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tisch Reservieren Button
                        </label>
                        <input name="team" type="text" value="<?php echo $Text[4];?>" class="form-control">
                    </div>
					
					
					
					
					
					<br><br><b>Teil Überschriften</b>
					
					
					      <div class="form-group">
                        <label>
<?php echo $Text[5];?>
                        </label>
                        <input name="aboutus" value="<?php echo $Text[5];?>" type="text" class="form-control">
                    </div>
							
				<div class="form-group">
                        <label>
<?php echo 'Angebote';?>
                        </label>
                        <input name="angebote" value="<?php echo $Text[7];?>" type="text" class="form-control">
                    </div>
					
					                    <div class="form-group">
                        <label>
<?php echo $Text[50];?>
                        </label>
                        <input name="menue" value="<?php echo $Text[9];?>" type="text" class="form-control">
                    </div>
							
<div class="form-group">
                        <label>
<?php echo $Text[51];?>
                        </label>
                        <input name="team" value="<?php echo $Text[11];?>" type="text" class="form-control">
                    </div>		
							
							
			<div class="form-group">
                        <label>
<?php echo $Text[52];?>
                        </label>
                        <input name="gal" value="<?php echo $Text[13];?>" type="text" class="form-control">
                    </div>				
							
							
							<div class="form-group">
                        <label>
<?php echo $Text[54];?>
                        </label>
                        <input name="kontakt" value="<?php echo $Text[18];?>" type="text" class="form-control">
                    </div>
							
		<div class="form-group">
                        <label>
<?php echo $Text[48];?>
                        </label>
                        <input name="blog" value="<?php echo $Text[15];?>" type="text" class="form-control">

                        <input name="blogAnzeigen" value="<?php echo $Text[16];?>" type="text" class="form-control">
                    </div>		
							
					<div class="form-group">
                        <label>
<?php echo $Text[53];?>
                        </label>
                        <input name="reservierung" value="<?php echo $Text[17];?>" type="text" class="form-control">
                    </div>		
							<div class="form-group">
                        <label>
<?php echo "Newsletter";?>
                        </label>
                        <input name="news" value="<?php echo $Text[28];?>" type="text" class="form-control">
                    </div>
							
							
					<div class="form-group">
                        <label>
<?php echo "Fusszeile Überschrift Erste Spalte";?>
                        </label>
                        <input name="spalte1" value="<?php echo $Text[30];?>" type="text" class="form-control">
                    </div>		
					
							
							<div class="form-group">
                        <label>
<?php echo "2. Spalte" ;?>
                        </label>
                        <input name="rechtstexte" value="<?php echo $Text[32];?>" type="text" class="form-control">
                    </div>
<div class="form-group">
                        <label>
<?php echo "3. Spalte" ;?>
                        </label>
                        <input name="rechtstexte" value="<?php echo $Text[36];?>" type="text" class="form-control">
                    </div>							
<div class="form-group">
                        <label>
<?php echo "4. Spalte" ;?>
                        </label>
                        <input name="rechtstexte" value="<?php echo $Text[40];?>" type="text" class="form-control">
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


