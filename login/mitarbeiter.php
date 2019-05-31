<?php 
//include ('../con.php');
include 'templates/header.php';

$currentUser = app('current_user');
?>

<div class="row">
    <?php
        $sidebarActive = 'mitarbeiter';
        require 'templates/sidebar.php';
    ?>

    <div class="col-md-9 col-lg-10">

       

        <div class="card">
            <div class="card-header">
               Stammdaten Einstellungen
            </div>
            <div class="card-body">
                <form id="menue">
                    <!-- Password input-->
					
				<table>	
                     <tr>
    <td><div class="contents"><div class="panel"><div class="panel-body"><form name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="40"><strong>Mitarbeiter Name</strong></td>
          <td height="40"><strong></strong></td>
          <td height="40"><span class="input-group">
            <input name="name" class="form-control" type="text" id="text_field2" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Mitarbeiter Beschreibung</strong></td>
          <td height="40"><strong></strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field3" class="form-control" type="text" id="text_field3" size="40" placeholder="example">
          </span></td>
        </tr>
        <tr>
          <td height="40"><strong>Mitarbeiter Beschreibung 2</strong></td>
          <td height="40"><strong></strong></td>
          <td height="40"><span class="input-group">
            <input name="text_field4" class="form-control" type="text" id="text_field4" size="40" placeholder="example">
          </span></td>
        </tr>
        
        <tr>
          <td height="40"><strong>Mitarbeiter Bild</strong></td>
          <td height="40"><strong></strong></td>
          <td height="40">
            <div class="input-group">
              <input name="text_field" class="form-control" type="text" id="text_field" size="40">
              <span class="input-group-btn">
                <button data-pan-model="fancybox" data-pan-field="text_field" data-pan-link="default" data-pan-platform="normal" class="btn btn-default minipan" type="button">Auswählen</button>
                </span>
              </div>      
            </td>
        </tr>	
  <tr>
          <td height="40"><strong></strong></td>
          <td height="40"><strong></strong></td>
          <td height="40"><span class="input-group">
            <button id="menu" type="submit" class="btn btn-primary">
						Aktualisieren
                    </button>
          </span></td>
        </tr>
                    
		  </table>     
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





