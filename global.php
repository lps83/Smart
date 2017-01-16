    <?php include("./debut.php"); ?>
    
<div class="element1">
				<div id = "global">
					<p>Global Info</p>
				</div>
				<div id = "sous-conteneur1">
					<div class="element-sous-conteneur"><img class = "maison" src = "./images/globalTemp.png"/></div>
					<div class="element-sous-conteneur"><img class = "maison" src = "./images/humRateLivingRoom.png"/></div>
					
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