<?php    
/*
	

define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'Domisep');

$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
$select_db = mysqli_select_db($connection,DB_DATABASE);





 $query_sensor = "SELECT * FROM `SENSORS` WHERE ROOM_ID='2' and SENSOR_TYPE = 'power' ORDER BY `SENSOR_TIME` DESC LIMIT 6";
 



$req_sensor = mysqli_query($connection, $query_sensor);

$tab_time[] = NULL;
$tab_value[] = NULL;

$i = 0 ;
				
				

				while ($data_sensor = mysqli_fetch_array($req)) {
					
$tab_time[$i] = $data_sensor['SENSOR_TIME'];
$tab_value[$i] = $data_sensor['SENSOR_DATA'];
$i++;
				
				}
*/
/*
				
				
				mysqli_free_result ($req_sensor);
*/

$tab_value[0]=intval($_GET['v0']);
$tab_value[1]=intval($_GET['v1']);
$tab_value[2]=intval($_GET['v2']);
$tab_value[3]=intval($_GET['v3']);
$tab_value[4]=intval($_GET['v4']);
$tab_value[5]=intval($_GET['v5']);


 /* CAT:Area Chart */ 


 /* pChart library inclusions */ 
 include("./class/pData.class.php"); 
 include("./class/pDraw.class.php"); 
 include("./class/pImage.class.php"); 
 

 /* Create and populate the pData object */ 
 $MyData = new pData();   
 $MyData->addPoints(array($tab_value[0],$tab_value[1],$tab_value[2],$tab_value[3],$tab_value[4],$tab_value[5]),"Global Sensor");
/*
 $MyData->addPoints(array(3,12,15,8,5,5),"Room 2"); 
 $MyData->addPoints(array(2,7,5,18,15,22),"Room 3"); 
*/
 $MyData->setSerieTicks("Probe 2",4); 
 $MyData->setAxisName(0,"Kw/H"); 
 $MyData->addPoints(array("Jan","Feb","Mar","Apr","May","Jun"),"Labels"); 
 $MyData->setSerieDescription("Labels","Months"); 
 $MyData->setAbscissa("Labels"); 

 /* Create the pChart object */ 
 $myPicture = new pImage(700,230,$MyData); 

 /* Turn of Antialiasing */ 
 $myPicture->Antialias = FALSE; 

 /* Add a border to the picture */ 
 $myPicture->drawRectangle(0,0,699,229,array("R"=>0,"G"=>0,"B"=>0)); 
  
 /* Write the chart title */  
 $myPicture->setFontProperties(array("FontName"=>"./fonts/Forgotte.ttf","FontSize"=>11)); 
 $myPicture->drawText(150,35,"Energy Consumption",array("FontSize"=>20,"Align"=>TEXT_ALIGN_BOTTOMMIDDLE)); 

 /* Set the default font */ 
 $myPicture->setFontProperties(array("FontName"=>"./fonts/pf_arma_five.ttf","FontSize"=>6)); 

 /* Define the chart area */ 
 $myPicture->setGraphArea(60,40,650,200); 

 /* Draw the scale */ 
 $scaleSettings = array("XMargin"=>10,"YMargin"=>10,"Floating"=>TRUE,"GridR"=>200,"GridG"=>200,"GridB"=>200,"DrawSubTicks"=>TRUE,"CycleBackground"=>TRUE); 
 $myPicture->drawScale($scaleSettings); 

 /* Write the chart legend */ 
 $myPicture->drawLegend(540,20,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL)); 

 /* Turn on Antialiasing */ 
 $myPicture->Antialias = TRUE; 

 /* Draw the area chart */ 
 $myPicture->drawAreaChart(); 

 /* Render the picture (choose the best way) */ 
 $myPicture->Stroke("pictures/example.drawAreaChart.simple.png"); 
?>