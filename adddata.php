<?php
	require('config.php');
    // If the values are posted, insert them into the database.
    
    if (isset($_POST['add_house'])){

		
       $HOUSE_NUMBER = $_POST['HOUSE_NUMBER'];
        $HOUSE_STREET = $_POST['HOUSE_STREET'];
        $HOUSE_CITY = $_POST['HOUSE_CITY'];
        $HOUSE_SIZE = $_POST['HOUSE_SIZE'];
        $HOUSE_ZIPCODE = $_POST['HOUSE_ZIPCODE'];
        $HOUSE_NBOFFLOOR = $_POST['HOUSE_NBOFFLOOR'];
        $HOUSE_NBOFROOM = $_POST['HOUSE_NBOFROOM'];
        
       
        $query = "INSERT INTO `HOUSES` (HOUSE_NUMBER, HOUSE_STREET, HOUSE_CITY, HOUSE_SIZE, HOUSE_ZIPCODE, HOUSE_NBOFFLOOR, HOUSE_NBOFROOM) VALUES ('$HOUSE_NUMBER', '$HOUSE_STREET', '$HOUSE_CITY', '$HOUSE_SIZE', '$HOUSE_ZIPCODE', '$HOUSE_NBOFFLOOR', '$HOUSE_NBOFROOM')";
        
//         echo $query;
        
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "House Created Successfully.";
            }
        else{
	        $smsg = "Problems";
	        }
	        
	        }
	        
    if (isset($_POST['add_room'])){

		
       
        $HOUSE_ID = $_POST['house_name_id'];
        $ROOM_NAME = $_POST['ROOM_NAME'];
        $ROOM_FLOOR = $_POST['ROOM_FLOOR'];

        
        $HOUSEID = ($HOUSE_ID[0]);
        
        $query = "INSERT INTO `ROOMS` (HOUSE_ID, ROOM_NAME, ROOM_FLOOR ) VALUES ('$HOUSEID', '$ROOM_NAME', '$ROOM_FLOOR')";

        
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "Room Created Successfully.";
            }
        else{
	        $smsg = "Problems";
	        }
	        
	        }
	        
	if (isset($_POST['add_sensor'])){

		
       
        $ROOM_ID = $_POST['room_name_id'];
        
        $SENSOR_NAME = $_POST['SENSOR_NAME'];
        $SENSOR_TYPE = $_POST['SENSOR_TYPE'];
        $SENSOR_DATA = $_POST['SENSOR_DATA'];
        $SENSOR_TIME = $_POST['SENSOR_TIME'];

        
        $ROOMID = ($ROOM_ID[0]);
        
//         echo($ROOMID);
        
        $query = "INSERT INTO `SENSORS` (ROOM_ID, SENSOR_NAME, SENSOR_TYPE, SENSOR_DATA, SENSOR_TIME ) VALUES ('$ROOMID', '$SENSOR_NAME', '$SENSOR_TYPE', '$SENSOR_DATA', '$SENSOR_TIME')";

//         echo($query);
        
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "Sensor Created Successfully.";
            }
        else{
	        echo "Problems";
	        }
	        
	        }
	        
if (isset($_POST['add_actuator'])){

		
       
        $ROOM_ID = $_POST['room_name_id'];
        
        $ACURATOR_NAME = $_POST['ACURATOR_NAME'];
        $ACURATOR_TYPE = $_POST['ACURATOR_TYPE'];
        $ACURATOR_DATA = $_POST['ACURATOR_DATA'];
        $ACURATOR_TIME = $_POST['ACURATOR_TIME'];

        
        $ROOMID = ($ROOM_ID[0]);
        
//         echo($ROOMID);
        
        $query = "INSERT INTO `ACURATORS` (ROOM_ID, ACURATOR_NAME, ACURATOR_TYPE, ACURATOR_DATA, ACURATOR_TIME ) VALUES ('$ROOMID', '$ACURATOR_NAME', '$ACURATOR_TYPE', '$ACURATOR_DATA', '$ACURATOR_TIME')";

//         echo($query);
        
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "ACURATOR Created Successfully.";
            }
        else{
	        echo "Problems";
	        }
	        
	        }

   
    ?>


<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>ADD DATA</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="section">
			<div class="logo">
				<a href="index.php">Smart Steward</a>
			</div>
			<ul>
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="login.php">Login</a>
				</li>
				<li>
					<a href="register.php">Register</a>
				</li>
				<li class="selected">
				<a href="adddata.php">Add Data</a>
				</li>
				
				<li>
					<a href="about.php">About</a>
				</li>
			</ul>
		</div>
		<div class="article">
			<h1>Add Data</h1>
			<p>
		<b>Here, we can add data directly to the database</b>
		<p>
			<h1>Add House</h1>
			<p>
			<form method="POST" enctype="multipart/form-data">
			<input type="text" name="HOUSE_NUMBER" placeholder="HOUSE_NUMBER" required>
			<p>
			<input type="text" name="HOUSE_STREET" placeholder="HOUSE_STREET" required>
			<p>
			<input type="text" name="HOUSE_CITY" placeholder="HOUSE_CITY" required>
			<p>
			<input type="text" name="HOUSE_SIZE" placeholder="HOUSE_SIZE" required>
			<p>
			<input type="text" name="HOUSE_ZIPCODE" placeholder="HOUSE_ZIPCODE" required>
			<p>
			<input type="text" name="HOUSE_NBOFFLOOR" placeholder="HOUSE_NBOFFLOOR" required>
			<p>
			<input type="text" name="HOUSE_NBOFROOM" placeholder="HOUSE_NBOFROOM" required>
			<p>
			<input type="submit" name="add_house" value="Add house">
			</form>
			
			
		<h1>Add Room</h1>
		<p>
		<b>Choose the house</b>
		<b>List ...</b>
		<form method="POST" enctype="multipart/form-data">
		<SELECT name="house_name_id" size="1">
			
			<?
				
				$sql = 'SELECT HOUSE_ID,HOUSE_NUMBER,HOUSE_STREET,HOUSE_CITY,HOUSE_ZIPCODE FROM HOUSES';
				
				$req = mysqli_query($connection, $sql);
				
				while ($data = mysqli_fetch_array($req)) {
				// on affiche les résultats

				
				echo '<OPTION>'.$data['HOUSE_ID'].' - '.$data['HOUSE_NUMBER'].' '.$data['HOUSE_STREET'].' '.$data['HOUSE_CITY'].'';
				
				//echo 'maison : '.$data['HOUSE_STREET'].'';
				
				}
				mysqli_free_result ($req);
				
				
				
				?>
		</SELECT>
		
		<br>
			<p>
			<input type="text" name="ROOM_NAME" placeholder="ROOM_NAME" required>
			<p>
			<input type="text" name="ROOM_FLOOR" placeholder="ROOM_FLOOR" required>
			<p>
			<input type="submit" name="add_room" value="Add room">
			
		
		</FORM>
		
		<h1>Add Sensor Value</h1>
		<p>
		<b>Choose the house</b>
		<br>
		<br>
		<form method="POST" enctype="multipart/form-data">
		<SELECT name="house_name_id_for_room" size="1">
			
			<?
				
				$sql = 'SELECT HOUSE_ID,HOUSE_NUMBER,HOUSE_STREET,HOUSE_CITY,HOUSE_ZIPCODE FROM HOUSES';
				
				$req = mysqli_query($connection, $sql);
				
				while ($data = mysqli_fetch_array($req)) {
				// on affiche les résultats

				
				echo '<OPTION>'.$data['HOUSE_ID'].' - '.$data['HOUSE_NUMBER'].' '.$data['HOUSE_STREET'].' '.$data['HOUSE_CITY'].'';
				
				//echo 'maison : '.$data['HOUSE_STREET'].'';
				
				}
				mysqli_free_result ($req);
				
				
				
				?>
		</SELECT>

		<input type="submit" name="valider_room" value="Valider choix">
		</FORM>

		<p>
			<br>
		<b>Choose the room</b>
		<br>
		<? if (isset($_POST['valider_room'])){
		$house_name_id_for_room = $_POST['house_name_id_for_room'];
		
        $house_name_id_for_room = ($house_name_id_for_room[0]);
        

// 			echo($house_name_id_for_room);
			}
			
			
			
				
				
		?>
		<form method="POST" enctype="multipart/form-data">
		<SELECT name="room_name_id" size="1">
		
			
			<?	if (isset($_POST['valider_room'])){
			
				

				$sql = "SELECT ROOM_ID,ROOM_NAME,ROOM_FLOOR FROM ROOMS WHERE HOUSE_ID = ".$house_name_id_for_room." ";
				$req = mysqli_query($connection, $sql);
				
				while ($data = mysqli_fetch_array($req)) {
				// on affiche les résultats

				
				echo '<OPTION>'.$data['ROOM_ID'].' - '.$data['ROOM_NAME'].' '.$data['ROOM_FLOOR'].'';

				}
				mysqli_free_result ($req);
				}
				
				
				?>
		</SELECT>
		
		<br>
		
			
			<input type="text" name="SENSOR_NAME" placeholder="SENSOR_NAME" required>
			<p>
			<input type="text" name="SENSOR_TYPE" placeholder="SENSOR_TYPE" required>
			<p>
			<input type="text" name="SENSOR_DATA" placeholder="SENSOR_DATA" required>
			<p>
			<input type="text" name="SENSOR_TIME" placeholder="SENSOR_TIME" required>
			<p>
			<input type="submit" name="add_sensor" value="Add Sensor">
			</FORM>
		<h1>Add Actuator value</h1>
		
		<p>
		<b>Choose the house</b>
		<br>
		<br>
		<form method="POST" enctype="multipart/form-data">
		<SELECT name="house_name_id_for_room" size="1">
			
			<?
				
				$sql = 'SELECT HOUSE_ID,HOUSE_NUMBER,HOUSE_STREET,HOUSE_CITY,HOUSE_ZIPCODE FROM HOUSES';
				
				$req = mysqli_query($connection, $sql);
				
				while ($data = mysqli_fetch_array($req)) {
				// on affiche les résultats

				
				echo '<OPTION>'.$data['HOUSE_ID'].' - '.$data['HOUSE_NUMBER'].' '.$data['HOUSE_STREET'].' '.$data['HOUSE_CITY'].'';
				
				//echo 'maison : '.$data['HOUSE_STREET'].'';
				
				}
				mysqli_free_result ($req);
				
				
				
				?>
		</SELECT>

		<input type="submit" name="valider_room" value="Valider choix">
		</FORM>

		<p>
			<br>
		<b>Choose the room</b>
		<br>
		<? if (isset($_POST['valider_room'])){
		$house_name_id_for_room = $_POST['house_name_id_for_room'];
		
        $house_name_id_for_room = ($house_name_id_for_room[0]);
        

// 			echo($house_name_id_for_room);
			}
			
			
			
				
				
		?>
		<form method="POST" enctype="multipart/form-data">
		<SELECT name="room_name_id" size="1">
		
			
			<?	if (isset($_POST['valider_room'])){
			
				

				$sql = "SELECT ROOM_ID,ROOM_NAME,ROOM_FLOOR FROM ROOMS WHERE HOUSE_ID = ".$house_name_id_for_room." ";
				$req = mysqli_query($connection, $sql);
				
				while ($data = mysqli_fetch_array($req)) {
				// on affiche les résultats

				
				echo '<OPTION>'.$data['ROOM_ID'].' - '.$data['ROOM_NAME'].' '.$data['ROOM_FLOOR'].'';

				}
				mysqli_free_result ($req);
				}
				
				
				?>
		</SELECT>
		
		<br>
		
			
			<input type="text" name="ACURATOR_NAME" placeholder="ACURATOR_NAME" required>
			<p>
			<input type="text" name="ACURATOR_TYPE" placeholder="ACURATOR_TYPE" required>
			<p>
			<input type="text" name="ACURATOR_DATA" placeholder="ACURATOR_DATA" required>
			<p>
			<input type="text" name="ACURATOR_TIME" placeholder="ACURATOR_TIME" required>
			<p>
			<input type="submit" name="add_actuator" value="Add Actuator">
			</FORM>
		
			
		<p>
			
		</p>
		</div>
	</div>
	<!--<div id="body">
		
	</div>-->
	<div id="footer">
		<div>
			<div class="connect">
				<a href="-" id="twitter">twitter</a>
				<a href="-" id="facebook">facebook</a>
				<a href="-" id="googleplus">googleplus</a>
				<a href="-" id="pinterest">pinterest</a>
			</div>
			<p>
				Copyright &copy; 2017 Smart Steward All rights reserved.
			</p>
		</div>
	</div>
</body>
</html>