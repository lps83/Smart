<?php  //Start the Session
session_start();
 require('config.php');
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `users` WHERE USER_LASTNAME='$username' and USER_PASSWORD='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="./css/SmartStewardGlobalInfo.css">
            <title>SMART STEWARD</title>
        <link rel="icon" type="image/png" href="15058540_1151471951595870_452330315_n.jpg" />
    </head>
    <body>
		<div id="conteneur">
		    <div class="element">
		    	<span>
			    	<h1>SMART STEWARD</h1>
	                <h5>Web Administration System</h5> 
                </span>
                <span>
                	<!img id = "photo1" src="smart home.jpg">
                </span>
            </div>
            
		    	<div class="element"> 
			    	<?php
						if (isset($_SESSION['username']) && isset($_SESSION['house_id'])){
						$username = $_SESSION['username'];
						echo "<br />";
						echo('<img src = "./photo/'.$username.'.jpg"  WIDTH=130 HEIGHT=130 align="right"/>  ');
						}
						else{
							
 						header('Location: ./index.php');
						exit();
		    	
                    }

?>
<!-- 			    	<img id="id-photo" src = "https://paiement-web.com/images/profil-logo.png"/> -->
			    	
		    </div>
	    	<div class="element">
	    		<?php
					if (isset($_SESSION['username'])){
					$username = $_SESSION['username'];
					$house_id = $_SESSION['house_id'];
					echo "<br />";
					echo "Bienvenue " . $username . " ";
					echo "<br />";
					echo "Maison " . $house_id . " ";
					echo "<br />";
				
					 
				$sql_house = "SELECT HOUSE_NUMBER,HOUSE_STREET,HOUSE_CITY,HOUSE_ZIPCODE FROM HOUSES WHERE HOUSE_ID = ".$house_id." ";
				$req_house = mysqli_query($connection, $sql_house);
				
				$data_house = mysqli_fetch_array($req_house);
				
				echo ' '.$data_house['HOUSE_NUMBER'].' '.$data_house['HOUSE_STREET'].' '.$data_house['HOUSE_ZIPCODE'].' '.$data_house['HOUSE_CITY'].'';
				echo "<br /><br />";
				
					}?>
                <button onclick = "quitter()" class = "b">Logout</button>
            </div>
		</div>
		<br>
		<div id = "conteneur1">
			<div class="element1">
				<ol id = "list">   
					<a href = "global.php"><div id = "liste3"><li classe="liste_2">Global Info</li></div></a>
                    <a href = "SSRoom.php"><div id = "liste3"><li classe="liste_2">Room</li></div></a>
                    <a href = "SSSensor.php"><div id = "liste3"><li classe="liste_2">Sensor</li></div></a>
                    <a href = "SSActuator.php"><div id = "liste3"><li classe="liste_2">Actuators</li></div></a>
                    <a href = "SSEnergy.php"><div id = "liste3"><li classe="liste_2">Energy consumption ?</li></div></a>
                    <a href = "SSInfo.php"><div id = "liste3"><li classe="liste_2">Sys Information</li></div></a>
				</ol>
			</div>
<!-- 			Debut de la page -->
<!--
			<div class="element1">
				<div id = "global">
					<p>Global Info</p>
				</div>
				<div id = "sous-conteneur1">
					<div class="element-sous-conteneur"><img class = "maison" src = "smart home.jpg"/></div>
					<div class="element-sous-conteneur"><img class = "maison" src = "smart home.jpg"/></div>
					<div class="element-sous-conteneur"><img class = "maison" src = "smart home.jpg"/></div>
				</div>
				<br>
				<div id = "sous-conteneur2">
					<div class="element-sous-conteneur2">
						<div id = "todo">
							<h4>TODO LIST</h4>
							<div id ="conteneur-bouton">
								<span class= "element">
									<button id="bout" class = "b" onclick = "addTask()">add</button>
								</span>
								<span class= "element">
									<button id="bout-suppr" class = "b" onclick = "reset()">reset</button> 
								</span>

								<span class= "element">
									<button id="bout-suppr-checked" class = "b" onclick = "removeChecked()">delete select item</button>
								</span>

							</div>
						</div>
					</div>

					<div class="element-sous-conteneur2">
						<div id = "historique">
							<div ><h4>connexions historic</h4>
							</div>
							<div id="cont-hist" style="overflow-y:scroll; height:200px;"></div>
						</div>
					</div>
				</div>	
			</div>

			
		</div>
		-->
		<!-- 			fin de la page -->
		
		