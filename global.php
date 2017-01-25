    <?php include("./debut.php"); ?>
    
<div class="element1">
				<div id = "global">
					<p>Global Info</p>
				</div>
				<div id = "sous-conteneur1">
					
					<?php  
	
 
	 
// $house_id = $_SESSION['house_id']


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
				
				while ($data_name = mysqli_fetch_array($req_name)){


					$tab_name[$i] = $data_name['ROOM_NAME'];
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
		
		case 3:
		
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
				
$query = "SELECT * FROM `SENSORS` WHERE ROOM_ID=".$tab_id[1]." and SENSOR_NAME = 'temp' ORDER BY `SENSOR_TIME` DESC LIMIT 6"; 
$req = mysqli_query($connection, $query);
$tab_time2[] = NULL;
$tab_value2[] = NULL;
$i = 0 ;				
				while ($data = mysqli_fetch_array($req)) {
$tab_time2[$i] = $data['SENSOR_TIME'];
$tab_value2[$i] = $data['SENSOR_DATA'];
$i++;
				}
				
				
		
		echo "<img src='graphtempglobal.php?nbderoom=".$nbderoom."&&v00=".$tab_value0[0]."&&v01=".$tab_value0[1]."&&v02=".$tab_value0[2]."&&v03=".$tab_value0[3]."&&v04=".$tab_value0[4]."&&v05=".$tab_value0[5]."&&v0name=".$tab_name[0]."&&v10=".$tab_value1[0]."&&v11=".$tab_value1[1]."&&v12=".$tab_value1[2]."&&v13=".$tab_value1[3]."&&v14=".$tab_value1[4]."&&v15=".$tab_value1[5]."&&v1name=".$tab_name[1]."&&v20=".$tab_value2[0]."&&v21=".$tab_value2[1]."&&v22=".$tab_value2[2]."&&v23=".$tab_value2[3]."&&v24=".$tab_value2[4]."&&v25=".$tab_value2[5]."&&v2name=".$tab_name[2]."'>";
		
		break;
		
		case 4:
		
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
				
$query = "SELECT * FROM `SENSORS` WHERE ROOM_ID=".$tab_id[1]." and SENSOR_NAME = 'temp' ORDER BY `SENSOR_TIME` DESC LIMIT 6"; 
$req = mysqli_query($connection, $query);
$tab_time2[] = NULL;
$tab_value2[] = NULL;
$i = 0 ;				
				while ($data = mysqli_fetch_array($req)) {
$tab_time2[$i] = $data['SENSOR_TIME'];
$tab_value2[$i] = $data['SENSOR_DATA'];
$i++;
				}
				
$query = "SELECT * FROM `SENSORS` WHERE ROOM_ID=".$tab_id[1]." and SENSOR_NAME = 'temp' ORDER BY `SENSOR_TIME` DESC LIMIT 6"; 
$req = mysqli_query($connection, $query);
$tab_time3[] = NULL;
$tab_value3[] = NULL;
$i = 0 ;				
				while ($data = mysqli_fetch_array($req)) {
$tab_time3[$i] = $data['SENSOR_TIME'];
$tab_value3[$i] = $data['SENSOR_DATA'];
$i++;
				}
				
				
		
		echo "<img src='graphtempglobal.php?nbderoom=".$nbderoom."&&v00=".$tab_value0[0]."&&v01=".$tab_value0[1]."&&v02=".$tab_value0[2]."&&v03=".$tab_value0[3]."&&v04=".$tab_value0[4]."&&v05=".$tab_value0[5]."&&v0name=".$tab_name[0]."&&v10=".$tab_value1[0]."&&v11=".$tab_value1[1]."&&v12=".$tab_value1[2]."&&v13=".$tab_value1[3]."&&v14=".$tab_value1[4]."&&v15=".$tab_value1[5]."&&v1name=".$tab_name[1]."&&v20=".$tab_value2[0]."&&v21=".$tab_value2[1]."&&v22=".$tab_value2[2]."&&v23=".$tab_value2[3]."&&v24=".$tab_value2[4]."&&v25=".$tab_value2[5]."&&v2name=".$tab_name[1]."&&v30=".$tab_value3[0]."&&v31=".$tab_value3[1]."&&v32=".$tab_value3[2]."&&v33=".$tab_value3[3]."&&v34=".$tab_value3[4]."&&v35=".$tab_value3[5]."&&v3name=".$tab_name[3]."'>";
		
		break;
		
	}
	
	
}


?>
</div>


				<br>
				<div id = "sous-conteneur2">
					<div class="element-sous-conteneur2">
						<div id = "todo" >
							<h4>TODO LIST</h4>
							<div id ="conteneur-bouton" >
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
							<div ><h4>CONNECTIONS HISTORY</h4>
							</div>
							<div id="cont-hist" style="overflow-y:scroll; height:200px;"><p>Hello</p><p>Hello</p><p>Hello</p><p>Hello</p><p>Hello</p><p>Hello</p><p>Hello</p></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		
		    
    <?php include("./fin.php"); ?>