    <?php include("./debut.php"); ?>
    
<div class="element1"><br>
				<div id = "global-conteneur">
					<a href = "./SSActuator.php?page=temp"><div class = "sousMenu">Temperature</div></a>
					<a href = "./SSActuator.php?page=humid"><div class = "sousMenu">Humidity</div></a>
					<a href = "./SSActuator.php?page=energ"><div class = "sousMenu">Energy</div></a>
					<a href = "./SSActuator.php?page=light"><div class = "sousMenu">Light</div></a>
				</div>

				<div id = "sous-conteneur1">
					<?
					
					if(isset($_GET["page"])){
						
						$page = $_GET["page"];
						
						
						switch($page){
							
							case "temp":
							
							include("./atemp.php");
							
							break;
							
							case "humid":
							include("./ahumid.php");
							break;
							
							case "energ":
							include("./aenerg.php");
							break;
							
							case "light":
							include("./alight.php");
							break;
							
						}
						}
						else{
							
							echo "Click on a TAB";
							
						}
						
						
					
					
					?>
				</div>
				<br>
				
			</div>
		</div>
		
		
    <?php include("./fin.php"); ?>