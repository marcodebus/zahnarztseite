<?php 
include ('con.php');
include('selectTexte.php');
include 'templates/header.php';

$currentUser = app('current_user');
?>

<div class="row">
    <?php
        $sidebarActive = 'seiten';
        require 'templates/sidebar.php';
    ?>

    <div class="col-md-9 col-lg-10">

 

        <div class="card">
            <div class="card-header">
				<h1>Langtexte Bearbeiten</h1>
            </div>
			
			
			<table class="table table-striped roles-table">
				<tr><td><h3>Animationsbereich</h3></td><td></td></tr>
			<tr>
				<td>
					<label><?php echo $Text[3];?> </label>
				</td>
				<td>
					<a href="./edit.php?nr=3"> <button id="menu" type="submit" class="btn btn-primary">
						Ändern
                    </button></a>
				</td>
			</tr>
				
				
				
				<tr><td><h3>Über Uns Text</h3></td><td></td></tr>
				
				
				
				<tr>
				<td>
					<label><?php echo $Text[6];?> </label>
				</td>
				<td>
					<a href="./edit.php?nr=6"> <button id="menu" type="submit" class="btn btn-primary">
						Ändern
                    </button></a>
				</td>
			</tr>
				
				<tr><td><h3>Aktuelle Angebote Text</h3></td><td></td></tr>
				<tr>
				<td>
					<label><?php echo $Text[8];?> </label>
				</td>
				<td>
					<a href="./editor.php?nr=8"> <button id="menu" type="submit" class="btn btn-primary">
						Ändern
                    </button></a>
				</td>
			</tr>
				
				
				<tr><td><h3>Menü Text</h3></td><td></td></tr>
				<tr>
				<td>
					<label><?php echo $Text[10];?> </label>
				</td>
				<td>
					<a href="./editor.php?nr=10"> <button id="menu" type="submit" class="btn btn-primary">
						Ändern
                    </button></a>
				</td>
			</tr>
				<tr><td><h3>Team Text</h3></td><td></td></tr>
				<tr>
				<td>
					<label><?php echo $Text[12];?> </label>
				</td>
				<td>
					<a href="./edit.php?nr=12"> <button id="menu" type="submit" class="btn btn-primary">
						Ändern
                    </button></a>
				</td>
			</tr>
				
				<tr><td><h3>Galerie Text</h3></td><td></td></tr>
				<tr>
				<td>
					<label><?php echo $Text[14];?> </label>
				</td>
				<td>
					<a href="./edit.php?nr=14"> <button id="menu" type="submit" class="btn btn-primary">
						Ändern
                    </button></a>
				</td>
			</tr>
				
				<tr><td><h3>Impressum</h3></td><td></td></tr>
				<tr>
				<td>
					<label><?php echo $Text[129];?> </label>
				</td>
					
				<td>
					<a href="./edit.php?nr=129"> <button id="menu" type="submit" class="btn btn-primary">
						Ändern
                    </button></a>
				</td>
			</tr>
				<tr><td><h3>Disclaimer</h3></td><td></td></tr>
				<tr>
				<td>
					<label><?php echo $Text[130];?> </label>
				</td>
					
				<td>
					<a href="./edit.php?nr=130"> <button id="menu" type="submit" class="btn btn-primary">
						Ändern
                    </button></a>
				</td>
			</tr>
				
				<tr><td><h3>Datenschutz</h3></td><td></td></tr>
				<tr>
				<td>
					<label><?php echo $Text[131];?> </label>
				</td>
				<td>
					<a href="./edit.php?nr=131"> <button id="menu" type="submit" class="btn btn-primary">
						Ändern
                    </button></a>
				</td>
			</tr>
				
				
			</table>
            
            
            </div>
        </div>

        
    </div>
</div>


    <script src="assets/js/vendor/sha512.js"></script>
    <?php include 'templates/footer.php'; ?>
    <script src="assets/js/app/profile.js"></script>
  </body>
</html>





