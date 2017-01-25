    <?php include("./debut.php"); ?>
    
<div class="element1"><br>
				<div id = "global-conteneur">
					<a href = "./SSSensor.php?page=temp"><div class = "sousMenu">Temperature</div></a>
					<a href = "./SSSensor.php?page=humid"><div class = "sousMenu">Humidity</div></a>
					<a href = "./SSSensor.php?page=energ"><div class = "sousMenu">Energy</div></a>
					<a href = "./SSSensor.php?page=light"><div class = "sousMenu">Light</div></a>
				</div>

				<div id = "sous-conteneur1">
					<?
					
					if(isset($_GET["page"])){
						
						$page = $_GET["page"];
						
						
						switch($page){
							
							case "temp":
							
							include("./stemp.php");
							
							break;
							
							case "humid":
							include("./shumid.php");
							break;
							
							case "energ":
							include("./senerg.php");
							break;
							
							case "light":
							include("./slight.php");
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