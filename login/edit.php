<?php
//header("location: https://mywaiter.de/EditorPage/index.php");

//include('con.php');
/*
if ($_GET['Close'] === "Beenden") {
					header("Location:  seiten.php");
					exit();
}

if (isset($_GET['submit'])) {
				
			
		//if  ($_get['submit'] === "Update"){
	
				$sql = "UPDATE `texte` SET `DE` = '".$_GET['text_area']."' WHERE `texte`.`ID` =". $_GET['nr'];

				if ($con->query($sql) === TRUE) {
					echo "Eintrag erfolgreich upgedatet.";
					header("Location:  edit.php?nr=". $_GET['nr']);
					exit();
				} else {
					echo "Error updating record: " . $conn->error;
				}
			//}
		
		
			}
*/





include 'templates/header.php';

//Editor Script
echo"<script type=\"text/javascript\" src=\"Scripts/jquery-1.8.1.min.js\"></script>";



//if (! app('current_user')->is_admin) {
//    redirect("index.php");
//}

// Default roles have ids 1, 2 and 3, so we will exclude them
// from results we want to get from this query, since we want
// to know number of users for our custom roles only.
$roles = app('db')->select(
    "SELECT `as_user_roles`.*, COUNT(`as_users`.`user_id`) as num FROM `as_user_roles`
    LEFT JOIN `as_users` ON `as_users`.`user_role` = `as_user_roles`.`role_id` 
    WHERE `as_user_roles`.`role_id` NOT IN (1,2,3)
    GROUP BY `as_user_roles`.`role_id`"
);

?>

<div class="row">
    <?php
        $sidebarActive = 'seiten';
        require 'templates/sidebar.php';
    ?>

    <div class="col-md-9 col-lg-10">
        <div class="mb-4">
           
			
			<?php
			
			
			

				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$result = mysqli_query($con,"SELECT * FROM `texte` WHERE `ID` = ". $_GET['nr']." ORDER BY `ID` ASC");

				
				while($row = mysqli_fetch_array($result))
				{
					$eintragung[] = $row['DE'];
					$id[] = $row['ID'];
					
				}
		
		//Editorzeile	
			
			echo"<form action=\"edit.php\" method=\"get\">";
			 echo"<textarea name=\"text_area\" id=\"text_area\" >".$eintragung[0]."</textarea>";
			echo"<input type=\"hidden\" value=\"".$id[0]."\" name=\"nr\"><br>";
			echo" <input type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"Update\">";
			echo" <input type=\"submit\" class=\"btn btn-primary\" name=\"Close\" value=\"Beenden\">";
		
			
		
			?>
			
			
			
			
			
			
			
            <!-- CALL CKEDITOR CONFIGS -->
            <script src="../login/editor/demos/ckeditor/ckeditor.js"></script>
			<script>
				CKEDITOR.replace( 'text_area' ,{
					filebrowserBrowseUrl: '../login/editor/index.php?pf=text_area&pm=default&pp=ckeditor&o=normal',
					filebrowserImageBrowseUrl: '../login/editor/index.php?pf=text_area&pm=default&pp=ckeditor&o=normal&type=Images',
					filebrowserWindowWidth: '820',
					filebrowserWindowHeight: '590'
					});
            </script>
			<!-- CALL CKEDITOR CONFIGS -->
					</form>
			
			
        </div>

      
              
      
        </div>
    </div>
</div>
    
        <?php include 'templates/footer.php'; ?>
        <script src="assets/js/app/roles.js"></script>
   	</body>
 </html>