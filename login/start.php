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
                Menüband Bearbeiten (Obere Leiste mit Links)
            </div>
            <div class="card-body">
                <form id="menue">
                    <!-- Password input-->
					
					
                    <div class="form-group">
                        <label>
                           Startseite
                        </label>
                        <input name="startseite:" type="text" value="<?php echo $Text[55];?>" class="form-control">
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label>
                          Über Uns
                        </label>
                        <input name="aboutus" type="text" value="<?php echo $Text[49];?>" class="form-control">
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label>
                            MENÜ
                        </label>
                        <input name="menue" value="<?php echo $Text[50];?>" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>TEAM
                        </label>
                        <input name="team" type="text" value="<?php echo $Text[51];?>" class="form-control">
                    </div>
					                    <div class="form-group">
                        <label>
BILDER
                        </label>
                        <input name="bilder" value="<?php echo $Text[52];?>" type="text" class="form-control">
                    </div>
					
					                    <div class="form-group">
                        <label>
BLOG
                        </label>
                        <input name="blog" type="text" value="<?php echo $Text[48];?>" class="form-control">
                    </div>
					                    <div class="form-group">
                        <label>
                    
RESERVIERUNG
                        </label>
                        <input name="reservierung" type="text" value="<?php echo $Text[53];?>" class="form-control">
                    </div>
					
					                    <div class="form-group">
                        <label>

KONTAKT
                        </label>
                        <input name="kontakt" type="text" value="<?php echo $Text[54];?>"  class="form-control">
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

