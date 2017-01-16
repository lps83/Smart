    <?php include("./debut.php"); ?>
    
<div class="element1"><br>
				<div id = "global-conteneur">
					<a href = "javascript:changer1()"><div class = "sousMenu">Living Room</div></a>
					<a href = "javascript:changer2()"><div class = "sousMenu">Kitchen</div></a>
					<a href = "javascript:changer3()"><div class = "sousMenu">Bed Room 2</div></a>
					<a href = "javascript:changer4()"><div class = "sousMenu">Bed Room 3</div></a>
					
				</div>
			
				<div id = "sous-conteneur1">
					<div class="element-sous-conteneur"><img class = "esc1" src = "./images/paranormal2.png"/></div>
					<div class="element-sous-conteneur"><img class = "esc1" src = "./images/parabed.jpg"/></div>
					
				</div>
				<br>
				<div id = "sous-conteneur2">
					<div class="element-sous-conteneur2">
						<img class = "esc1" src = "./images/Paranormal-activity.jpg"/>
					</div>
					<div class="element-sous-conteneur2">
						<img class = "esc1" src = "./images/parakitchen.jpg"/>
					</div>
					</div>
					</div>
					
				</div>	
			</div>
		</div>

		<script>
//function changer1 when clicking on room menu //!\\ LIVING ROOM //!\\
//#############################################
function changer1(){
	var cont1 = document.getElementById("sous-conteneur1")
	cont1.innerHTML = "";
	var container11 = document.createElement('div');
	container11.className = "element-sous-conteneur";

	var container12 = document.createElement('div');
	container12.className = "element-sous-conteneur";

	var imgTemp = document.createElement('img')
	imgTemp.src = './images/TempLivingRoom.png'
	imgTemp.className = 'esc1'
	var imgHum = document.createElement('img')
	imgHum.src = './images/humRateLivingRoom.png'
	imgHum.className = 'esc1'
	
	container11.appendChild(imgTemp)
	container12.appendChild(imgHum)
	cont1.appendChild(container11)
	cont1.appendChild(container12)

	var cont2 = document.getElementById("sous-conteneur2");
	cont2.innerHTML = "";
	var container21 = document.createElement('div');
	container21.className = "element-sous-conteneur2";

	var container22 = document.createElement('div');
	container22.className = "element-sous-conteneur2";

	var imgLivingRoom = document.createElement('img')
	imgLivingRoom.src = './images/paranormal2.png'
	imgLivingRoom.className = 'maison'
	
	container21.appendChild(imgLivingRoom)
	cont2.appendChild(container21)

	var comp11 = document.createElement('input')
	

	var comp12 = document.createElement('div')
	comp12.innerHTML = "Temperature : "
	
	var comp1 = document.createElement('div')
	comp1.className = "class1";
	comp1.appendChild(comp12)
	comp1.appendChild(comp11)


	var comp21 = document.createElement('input')
	

	var comp22 = document.createElement('div')
	comp22.innerHTML = "Humidity : "
	
	var comp2 = document.createElement('div')
	comp2.className = "class1";
	comp2.appendChild(comp22)
	comp2.appendChild(comp21)

	
	var comp31 = document.createElement('input')
	comp31.type = "range" 
	comp31.min="1" 
	comp31.max="9" 
	comp31.step="1"

	var comp32 = document.createElement('div')
	comp32.innerHTML = "Light Intensity : "
	
	var comp3 = document.createElement('div')
	comp3.className = "class1";
	comp3.appendChild(comp32)
	comp3.appendChild(comp31)

	container22.appendChild(comp1)
	container22.appendChild(comp2)
	container22.appendChild(comp3)
	cont2.appendChild(container22) 
	
}

//fin de la fonction changer1() //!\\ LIVING ROOM //!\\
//############################################################################





//function changer2 when clicking on room menu //!\\ KITCHEN //!\\
//#############################################
function changer2(){
	var cont1 = document.getElementById("sous-conteneur1")
	cont1.innerHTML = "";
	var container11 = document.createElement('div');
	container11.className = "element-sous-conteneur";

	var container12 = document.createElement('div');
	container12.className = "element-sous-conteneur";

	var imgTemp = document.createElement('img')
	imgTemp.src = './images/TempLivingRoom.png'
	imgTemp.className = 'esc1'
	var imgHum = document.createElement('img')
	imgHum.src = './images/humRateLivingRoom.png'
	imgHum.className = 'esc1'
	
	container11.appendChild(imgTemp)
	container12.appendChild(imgHum)
	cont1.appendChild(container11)
	cont1.appendChild(container12)

	var cont2 = document.getElementById("sous-conteneur2");
	cont2.innerHTML = "";
	var container21 = document.createElement('div');
	container21.className = "element-sous-conteneur2";

	var container22 = document.createElement('div');
	container22.className = "element-sous-conteneur2";

	var imgLivingRoom = document.createElement('img')
	imgLivingRoom.src = './images/parakitchen.jpg'
	imgLivingRoom.className = 'maison'
	
	container21.appendChild(imgLivingRoom)
	cont2.appendChild(container21)

	var comp11 = document.createElement('input')
	

	var comp12 = document.createElement('div')
	comp12.innerHTML = "Temperature : "
	
	var comp1 = document.createElement('div')
	comp1.className = "class1";
	comp1.appendChild(comp12)
	comp1.appendChild(comp11)


	var comp21 = document.createElement('input')
	

	var comp22 = document.createElement('div')
	comp22.innerHTML = "Humidity : "
	
	var comp2 = document.createElement('div')
	comp2.className = "class1";
	comp2.appendChild(comp22)
	comp2.appendChild(comp21)

	
	var comp31 = document.createElement('input')
	comp31.type = "range" 
	comp31.min="1" 
	comp31.max="9" 
	comp31.step="1"

	var comp32 = document.createElement('div')
	comp32.innerHTML = "Light Intensity : "
	
	var comp3 = document.createElement('div')
	comp3.className = "class1";
	comp3.appendChild(comp32)
	comp3.appendChild(comp31)

	container22.appendChild(comp1)
	container22.appendChild(comp2)
	container22.appendChild(comp3)
	cont2.appendChild(container22) 
	
}

//fin de la fonction changer2()
//############################################################################


//function changer3() when clicking on room menu //!\\ BED ROOM //!\\
//#############################################
function changer3(){
	var cont1 = document.getElementById("sous-conteneur1")
	cont1.innerHTML = "";
	var container11 = document.createElement('div');
	container11.className = "element-sous-conteneur";

	var container12 = document.createElement('div');
	container12.className = "element-sous-conteneur";

	var imgTemp = document.createElement('img')
	imgTemp.src = './images/TempLivingRoom.png'
	imgTemp.className = 'esc1'
	var imgHum = document.createElement('img')
	imgHum.src = './images/humRateLivingRoom.png'
	imgHum.className = 'esc1'
	
	container11.appendChild(imgTemp)
	container12.appendChild(imgHum)
	cont1.appendChild(container11)
	cont1.appendChild(container12)

	var cont2 = document.getElementById("sous-conteneur2");
	cont2.innerHTML = "";
	var container21 = document.createElement('div');
	container21.className = "element-sous-conteneur2";

	var container22 = document.createElement('div');
	container22.className = "element-sous-conteneur2";

	var imgLivingRoom = document.createElement('img')
	imgLivingRoom.src = './images/parabed.jpg'
	imgLivingRoom.className = 'maison'
	
	container21.appendChild(imgLivingRoom)
	cont2.appendChild(container21)

	var comp11 = document.createElement('input')
	

	var comp12 = document.createElement('div')
	comp12.innerHTML = "Temperature : "
	
	var comp1 = document.createElement('div')
	comp1.className = "class1";
	comp1.appendChild(comp12)
	comp1.appendChild(comp11)


	var comp21 = document.createElement('input')
	

	var comp22 = document.createElement('div')
	comp22.innerHTML = "Humidity : "
	
	var comp2 = document.createElement('div')
	comp2.className = "class1";
	comp2.appendChild(comp22)
	comp2.appendChild(comp21)

	
	var comp31 = document.createElement('input')
	comp31.type = "range" 
	comp31.min="1" 
	comp31.max="9" 
	comp31.step="1"

	var comp32 = document.createElement('div')
	comp32.innerHTML = "Light Intensity : "
	
	var comp3 = document.createElement('div')
	comp3.className = "class1";
	comp3.appendChild(comp32)
	comp3.appendChild(comp31)

	container22.appendChild(comp1)
	container22.appendChild(comp2)
	container22.appendChild(comp3)
	cont2.appendChild(container22) 
	
}
</script>
		    
    <?php include("./fin.php"); ?>