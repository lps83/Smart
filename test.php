
<?php    
	
require('config.php');	 
	 
// $house_id = $_SESSION['house_id']
$house_id = 4;
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
				
				while ($data_name = mysqli_fetch_array($req_name)){


					$tab_name[$i] = $data_name['ROOM_NAME'];
					echo $tab_name[$i];
					$tab_id[$i] = $data_name['ROOM_ID'];
					$i++;
					
					
					}

	
	switch($nbderoom){
		
		
		case 2:
		
$query = "SELECT * FROM `SENSORS` WHERE ROOM_ID=".$tab_id[0]." and SENSOR_NAME = 'temp' ORDER BY `SENSOR_TIME` DESC LIMIT 6"; 
$req = mysqli_query($connection, $query);
$tab_time0[] = NULL;
$tab_value0[] = NULL;
$i = 0 ;				
				while ($data = mysqli_fetch_array($req)) {
$tab_time0[$i] = $data['SENSOR_TIME'];
$tab_value0[$i] = $data['SENSOR_DATA'];
$i++;
				}
				
$query = "SELECT * FROM `SENSORS` WHERE ROOM_ID=".$tab_id[1]." and SENSOR_NAME = 'temp' ORDER BY `SENSOR_TIME` DESC LIMIT 6"; 
$req = mysqli_query($connection, $query);
$tab_time1[] = NULL;
$tab_value1[] = NULL;
$i = 0 ;				
				while ($data = mysqli_fetch_array($req)) {
$tab_time1[$i] = $data['SENSOR_TIME'];
$tab_value1[$i] = $data['SENSOR_DATA'];
$i++;
				}
				
				
		
		echo "<img src='graphtempglobal.php?nbderoom=".$nbderoom."&&v00=".$tab_value0[0]."&&v01=".$tab_value0[1]."&&v02=".$tab_value0[2]."&&v03=".$tab_value0[3]."&&v04=".$tab_value0[4]."&&v05=".$tab_value0[5]."&&v0name=".$tab_name[0]."&&v10=".$tab_value1[0]."&&v11=".$tab_value1[1]."&&v12=".$tab_value1[2]."&&v13=".$tab_value1[3]."&&v14=".$tab_value1[4]."&&v15=".$tab_value1[5]."&&v1name=".$tab_name[1]."'>";
		
		break;
		
		
	}
	
	
}


?>
