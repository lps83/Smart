<?php    

$nbderoom =intval($_GET['nbderoom']);

 /* CAT:Area Chart */ 

 /* pChart library inclusions */ 
 include("./class/pData.class.php"); 
 include("./class/pDraw.class.php"); 
 include("./class/pImage.class.php"); 
 

 /* Create and populate the pData object */ 
 $MyData = new pData();  
 

switch ($nbderoom){
	  
	  
	case '2':
	$MyData->addPoints(array(intval($_GET['v00']),intval($_GET['v01']),intval($_GET['v02']),intval($_GET['v03']),intval($_GET['v04']),intval($_GET['v05'])),$_GET['v0name']);
	$MyData->addPoints(array(intval($_GET['v10']),intval($_GET['v11']),intval($_GET['v12']),intval($_GET['v13']),intval($_GET['v14']),intval($_GET['v15'])),$_GET['v1name']);
	break;
	
/*
	case "3":
	$MyData->addPoints(array(intval($_GET['v00'],intval($_GET['v01'],intval($_GET['v02'],intval($_GET['v03'],intval($_GET['v04'],intval($_GET['v05'],$_GET['v0name']);
	$MyData->addPoints(array(intval($_GET['v10'],intval($_GET['v11'],intval($_GET['v12'],intval($_GET['v13'],intval($_GET['v14'],intval($_GET['v15'],$_GET['v1name']);
	$MyData->addPoints(array(intval($_GET['v20'],intval($_GET['v21'],intval($_GET['v22'],intval($_GET['v23'],intval($_GET['v24'],intval($_GET['v25'],$_GET['v2name']);
	break;
	
	case "4":
	$MyData->addPoints(array(intval($_GET['v00'],intval($_GET['v01'],intval($_GET['v02'],intval($_GET['v03'],intval($_GET['v04'],intval($_GET['v05'],$_GET['v0name']);
	$MyData->addPoints(array(intval($_GET['v10'],intval($_GET['v11'],intval($_GET['v12'],intval($_GET['v13'],intval($_GET['v14'],intval($_GET['v15'],$_GET['v1name']);
	$MyData->addPoints(array(intval($_GET['v20'],intval($_GET['v21'],intval($_GET['v22'],intval($_GET['v23'],intval($_GET['v24'],intval($_GET['v25'],$_GET['v2name']);
	$MyData->addPoints(array(intval($_GET['v30'],intval($_GET['v31'],intval($_GET['v32'],intval($_GET['v33'],intval($_GET['v34'],intval($_GET['v35'],$_GET['v3name']);
	break;
	
	case "5":
	$MyData->addPoints(array(intval($_GET['v00'],intval($_GET['v01'],intval($_GET['v02'],intval($_GET['v03'],intval($_GET['v04'],intval($_GET['v05'],$_GET['v0name']);
	$MyData->addPoints(array(intval($_GET['v10'],intval($_GET['v11'],intval($_GET['v12'],intval($_GET['v13'],intval($_GET['v14'],intval($_GET['v15'],$_GET['v1name']);
	$MyData->addPoints(array(intval($_GET['v20'],intval($_GET['v21'],intval($_GET['v22'],intval($_GET['v23'],intval($_GET['v24'],intval($_GET['v25'],$_GET['v2name']);
	$MyData->addPoints(array(intval($_GET['v30'],intval($_GET['v31'],intval($_GET['v32'],intval($_GET['v33'],intval($_GET['v34'],intval($_GET['v35'],$_GET['v3name']);
	$MyData->addPoints(array(intval($_GET['v40'],intval($_GET['v41'],intval($_GET['v42'],intval($_GET['v43'],intval($_GET['v44'],intval($_GET['v45'],$_GET['v4name']);
	break;
	
	case "6":
	$MyData->addPoints(array(intval($_GET['v00'],intval($_GET['v01'],intval($_GET['v02'],intval($_GET['v03'],intval($_GET['v04'],intval($_GET['v05'],$_GET['v0name']);
	$MyData->addPoints(array(intval($_GET['v10'],intval($_GET['v11'],intval($_GET['v12'],intval($_GET['v13'],intval($_GET['v14'],intval($_GET['v15'],$_GET['v1name']);
	$MyData->addPoints(array(intval($_GET['v20'],intval($_GET['v21'],intval($_GET['v22'],intval($_GET['v23'],intval($_GET['v24'],intval($_GET['v25'],$_GET['v2name']);
	$MyData->addPoints(array(intval($_GET['v30'],intval($_GET['v31'],intval($_GET['v32'],intval($_GET['v33'],intval($_GET['v34'],intval($_GET['v35'],$_GET['v3name']);
	$MyData->addPoints(array(intval($_GET['v40'],intval($_GET['v41'],intval($_GET['v42'],intval($_GET['v43'],intval($_GET['v44'],intval($_GET['v45'],$_GET['v4name']);
	$MyData->addPoints(array(intval($_GET['v50'],intval($_GET['v51'],intval($_GET['v52'],intval($_GET['v53'],intval($_GET['v54'],intval($_GET['v55'],$_GET['v5name']);
	break;
*/
	
	 
 }


 
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
 $myPicture->drawText(150,35,"Global Temperature",array("FontSize"=>20,"Align"=>TEXT_ALIGN_BOTTOMMIDDLE)); 

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