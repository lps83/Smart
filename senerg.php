<?
		if (isset($_POST['add_sensor'])){

		
       
        $ROOM_ID = $_POST['room_name_id'];
        
        $SENSOR_NAME = $_POST['SENSOR_NAME'];
        $SENSOR_TYPE = $_POST['SENSOR_TYPE'];
        $SENSOR_DATA = $_POST['SENSOR_DATA'];
        $SENSOR_TIME = $_POST['SENSOR_TIME'];

        
        $ROOMID = ($ROOM_ID[0]);
        
//         echo($ROOMID);
        
        $query = "INSERT INTO `SENSORS` (ROOM_ID, SENSOR_NAME, SENSOR_TYPE, SENSOR_DATA, SENSOR_TIME ) VALUES ('$ROOMID', 'energ', 'energ', '$SENSOR_DATA', '$SENSOR_TIME')";

//         echo($query);
        
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "Sensor Created Successfully.";
            }
        else{
	        echo "Problems";
	        }
	        
	        }
	        
	

							$house_id = $_SESSION['house_id'];
$query_nb = "SELECT COUNT(*) as compteur FROM `ROOMS` WHERE `HOUSE_ID`=".$house_id."";	
$req_nb_rooms = mysqli_query($connection, $query_nb);
$tab_nb_rooms = mysqli_fetch_array($req_nb_rooms);
mysqli_free_result ($req_nb_rooms);

$nbderoom = $tab_nb_rooms["compteur"];

if ( $tab_nb_rooms["compteur"] ){
	
	$query_name = "SELECT * FROM `ROOMS` WHERE `HOUSE_ID`=".$house_id."";
	$req_name = mysqli_query($connection, $query_name);

$tab_name[] = NULL;
$tab_id[] = NULL;
$i = 0 ;
				
				echo utf8_decode("
				<br>
				<table>
				
					<tr>
					<td colspan='5'>Room Name</td><td colspan='5'>Last value</td><td colspan='5'>Date</td>
					</tr>");
					
					
				while ($data_name = mysqli_fetch_array($req_name)){


					$tab_name[$i] = $data_name['ROOM_NAME'];
					$tab_id[$i] = $data_name['ROOM_ID'];

						$query = "SELECT * FROM `SENSORS` WHERE ROOM_ID=".$tab_id[$i]." and SENSOR_NAME = 'energ' ORDER BY `SENSOR_TIME` DESC LIMIT 1"; 
						$req = mysqli_query($connection, $query);
						$data = mysqli_fetch_array($req);
						$tab_time0 = $data['SENSOR_TIME'];
						$tab_value0 = $data['SENSOR_DATA'];
						$date  = date("Y-m-d H:i:s",$tab_time0);
				
						
						echo utf8_decode("<tr> <td colspan='5'>".$tab_name[$i]."</td> <td colspan='5'> ".$tab_value0." </td> <td colspan='5'> ".$date." </td> </tr>");
						
					$i++;
				
					
					}
					echo "</table>";	
					}
					
					else{
						
						echo "Pas de donnée a afficher";
						
					}
					
?>
</div>
	<div id="formsensor">
<b>Choose the room</b>
		<br>
		<? 
		
        $house_name_id_for_room = $_SESSION['house_id'];
		
		?>
		
		<br>
		<form method="POST" enctype="multipart/form-data">
		<SELECT name="room_name_id" size="1">
		
			
			<?	
			
				

				$sql = "SELECT ROOM_ID,ROOM_NAME,ROOM_FLOOR FROM ROOMS WHERE HOUSE_ID = ".$house_name_id_for_room." ";
				$req = mysqli_query($connection, $sql);
				
				while ($data = mysqli_fetch_array($req)) {
				// on affiche les résultats

				
				echo '<OPTION>'.$data['ROOM_ID'].' - '.$data['ROOM_NAME'].' '.$data['ROOM_FLOOR'].'';

				}
				mysqli_free_result ($req);
		
				
				
				?>
		</SELECT>
		
		<br>
		
			<p>
			<p>
			<input type="text" name="SENSOR_DATA" placeholder="SENSOR_DATA" required>
			<p>
			<input type="text" name="SENSOR_TIME" placeholder="SENSOR_TIME" required>
			<p>
			<input type="submit" name="add_sensor" value="Add Sensor">
			</FORM>
	
