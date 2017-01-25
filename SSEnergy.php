
    <?php include("./debut.php"); ?>
    
			<div class="element1">
				
				<div id = "global">
					<p>Energy Consumption</p>
				</div>
				
				<div id = "sous-conteneur1">
					
<?php    
	

$query = "SELECT * FROM `SENSORS` WHERE ROOM_ID='2' and SENSOR_TYPE = 'power' ORDER BY `SENSOR_TIME` DESC LIMIT 6";
 
$req = mysqli_query($connection, $query);

$tab_time[] = NULL;
$tab_value[] = NULL;



$i = 0 ;
				
				while ($data = mysqli_fetch_array($req)) {
// 				echo(serialize($data));
				// on affiche les résultats
$tab_time[$i] = $data['SENSOR_TIME'];
$tab_value[$i] = $data['SENSOR_DATA'];


$i++;
				
				}
				mysqli_free_result ($req);
				

					echo "<img src='graphenergy.php?v0=".$tab_value[0]."&&v1=".$tab_value[1]."&&v2=".$tab_value[2]."&&v3=".$tab_value[3]."&&v4=".$tab_value[4]."&&v5=".$tab_value[5]."'>";
					
?>
					
				</div>
				<br>
				<div id = "sous-conteneur2">
					
				</div>	
			</div>
		</div>
		
		    <?php include("./fin.php"); ?>
		
		