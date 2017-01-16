
		<footer>
            <p>Copyright - Tous droits réservés<br />

            <a href="#">Contact US</a></p>
 
        </footer>
        <script type="text/javascript">

		function quitter() {
		    var conf  = confirm("Do you really want to leave the SmartSteward ???");
		    if(conf == true){
		    	document.location.href = "./logout.php";
		    }
		}
		
			//define initial task list		
				var task = ["add scroll to the list","add php to get the nb of room, sensor and actuator"];	
			//define title
				//var h1 = document.createElement('h1');
				//h1.textContent = "TODO liste";//

				var root = document.getElementById('todo');
				var ul = document.createElement('ul');
				//root.appendChild(h1);
				root.appendChild(ul);

			//###############function part############################

				function addTask(){
					var taskToAdd = prompt('tache?');
					task.push(taskToAdd);
					liste(task,ul);	
				}

				function reset(){
					var con = confirm("do you really want to reset the list ??")
					if (con== true){
					task = [];
					liste(task,ul);}
				}

				function removeTask(){
					task.splice(task.length - 1, 1);
					liste(task,ul);	
				}

				function Save(){
					if (typeof(Storage) !== "undefined") {
						localStorage.getItem("ul")
					}

				}

					function removeChecked(){
						new_task = []
						for (var it=0;it<task.length;it++){
							var a = document.getElementsByClassName('ck');
							if (a[it].checked == false){
								new_task.push(task[it]); 
							} 
						}
						task = new_task;
						liste(task,ul);	
					}

				//###############function part###########################

				function createNewCheckboxt(name, id){
				    var checkbox = document.createElement('input'); 
				    checkbox.type= 'checkbox';
				    checkbox.name = name;
				    checkbox.className = id;
				    return checkbox;
				}
				//display the list on the DOM
				function liste(array,var1){
						var1.innerHTML = '';
						for (var i=0;i<array.length;i++){
							var li = document.createElement('li');
							
							li.textContent = array[i];li.appendChild(createNewCheckboxt('ck', 'ck'));
							var1.appendChild(li);
						}
						//var1.style.color = '#e1e1ff';
						var res = root.appendChild(var1);
						return res;
				}

				//var addButton = document.getElementById('bout');
				liste(task,ul);	

			</script>
	</body>
</html>