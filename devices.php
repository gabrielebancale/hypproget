<?php
		//connessione
		$username = "hypprojectbancalecassani";
        $password = "caspodufcu46";
        $host = "localhost";
        $database = "my_hypprojectbancalecassani";
     
          $db = mysqli_connect($host, $username, $password, $database) or die("Errore durante la connessione al database");
				
		  if (mysqli_connect_errno()) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
		   }
     
		$cat = $_GET["cat"];
		$id = $_GET["id"];
		
		//mostra Devices By Category
		if($id === "null"){

			switch($cat){
				
        			//SMARTPHONE
 					case "smartphone":
       	 			$query = "SELECT * FROM smartphone ";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					
					echo '<h1>SMARTPHONES<h1>';
		
					while ($row = mysqli_fetch_array($result)){
		
    					echo
							'<table id="link_style" width="35%" height="100%" border = "0" align="right">'. 
							'<tr>'.
							'<td width="30%" height="180px">'.
							'<img src="images/devices/'.$row['image_front'].'" width="70%" height="75%">'.
							'</td>'.
							'<td>'.
							'<a class="db_link" align="center" style="font-size:18px" 																																					            				href="Device.html?cat=smartphone&id='.$row['id'].'">'.$row['nome'].'</a>'.
							'</td>'.
							'</tr>'.
							'</table>';
					}
							
					
					echo 
						'<div id="link_style" class="prev_next_links">
                    	<div class="device_link_prev">
                        </div>
                    	<div class="device_link_next">
                        <a href="DevicesByCategory.html?cat=Tablet"> <h3>TABLET & <br/>COMPUTER</h3> </a>
						</div>
                		</div>';
		
					mysqli_close($db);
        
        			break;
        
        
        			//TABLET
    				case "Tablet":    
					$query = "SELECT * FROM Tablet";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					echo '<h1>TABLET<h1>';
		
					while ($row = mysqli_fetch_array($result)){
		
    					echo 
							'<table id="link_style" width="35%" height="100%" border = "0" align="right">'. 
							'<tr>'.
							'<td width="30%" height="180px">'.
							'<img src="images/devices/'.$row['image_front'].'" width="70%" height="75%">'.
							'</td>'.
							'<td>'.
							'<a class="db_link" align="center" style="font-size:18px" 																																					            				href="Device.html?cat=Tablet&id='.$row['id'].'">'.$row['nome'].'</a>'.
							'</td>'.
							'</tr>'.
							'</table>';
					}
		
					echo 
						'<div id="link_style" class="prev_next_links">
                    	<div class="device_link_prev">
                        <a href="DevicesByCategory.html?cat=smartphone"> <h3>SMARTPHONE &<br/> TELEFONI</h3> </a>
                    	</div>
                    	<div class="device_link_next">
                        <a href="DevicesByCategory.html?cat=modem"><h3>MODEM & <br/> NETWORKING</h3></a>
                    	</div>
                		</div>';
		
					mysqli_close($db);
       
	    			break;
        
        			//MODEM
    				case "modem":
        			$query = "SELECT * FROM modem";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					echo '<h1>MODEM<h1>';
		
					while ($row = mysqli_fetch_array($result)){
		
    					echo 
							'<table id="link_style" width="35%" height="100%" border = "0" align="right">'. 
							'<tr>'.
							'<td width="30%" height="180px">'.
							'<img src="images/devices/'.$row['image_front'].'" width="70%" height="75%">'.
							'</td>'.
							'<td>'.
							'<a class="db_link" align="center" style="font-size:18px" 																																					            				href="Device.html?cat=modem&id='.$row['id'].'">'.$row['nome'].'</a>'.
							'</td>'.
							'</tr>'.
							'</table>';
					}
		
					echo 
						'<div id="link_style" class="prev_next_links">
                    	<div class="device_link_prev">
                        <a href="DevicesByCategory.html?cat=Tablet"> <h3>TABLET & <br/>COMPUTER</h3> </a>
                    	</div>
                    	<div class="device_link_next">
                   		<a href="DevicesByCategory.html?cat=tv_smartliving"><h3>TV & SMART LIVING</h3></a>
                    	</div>
                		</div>';
		
					mysqli_close($db);
        
        			break;
        
        			//TV
    				case "tv_smartliving":
        			$query = "SELECT * FROM tv_smartliving";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					echo '<h1>TV e SMARTLIVING<h1>';
		
					while ($row = mysqli_fetch_array($result)){
		
    					echo 
							'<table id="link_style" width="35%" height="100%" border = "0" align="right">'. 
							'<tr>'.
							'<td width="30%" height="180px">'.
							'<img src="images/devices/'.$row['image_front'].'" width="70%" height="75%">'.
							'</td>'.
							'<td>'.
							'<a class="db_link" align="center" style="font-size:18px" 																																					            				href="Device.html?cat=tv_smartliving&id='.$row['id'].'">'.$row['nome'].'</a>'.
							'</td>'.
							'</tr>'.
							'</table>';
					}
		
					echo 
						'<div id="link_style" class="prev_next_links">
                   		<div class="device_link_prev">
                   		<a href="DevicesByCategory.html?cat=modem"><h3>MODEM & <br/> NETWORKING</h3></a>
                    	</div>
                    	<div class="device_link_next">
                        <a href="DevicesByCategory.html?cat=discount"> <h3>DISCOUNT</h3></a>
                    	</div>
						</div>';
		
					mysqli_close($db);
        
        			break;
        
        			//DISCOUNT
    				case "discount":
         			$query = "SELECT * FROM discount";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					echo '<h1>DISCOUNT<h1>';
		
					while ($row = mysqli_fetch_array($result)){
		
    					echo 
							'<table id="link_style" width="35%" height="100%" border = "0" align="right">'. 
							'<tr>'.
							'<td width="30%" height="180px">'.
							'<img src="images/devices/'.$row['image_front'].'" width="70%" height="75%">'.
							'</td>'.
							'<td>'.
							'<a class="db_link" align="center" style="font-size:18px" 																																					            				href="Device.html?cat=discount&id='.$row['id'].'">'.$row['nome'].'</a>'.
							'</td>'.
							'</tr>'.
							'</table>';
					}
		
					echo 
						'<div id="link_style" class="prev_next_links">
                    	<div class="device_link_prev">
                        <a href="DevicesByCategory.html?cat=tv_smartliving"><h3>TV & SMART LIVING</h3></a>
                    	</div>
                    	<div class="device_link_next">
                      	</div>
                		</div>';
		
					mysqli_close($db);
        
        			break;
        
        			
               
			}
		}
		
		else{
			
				//conto il numero di righe nella tabella $cat
				$query = "SELECT * FROM $cat";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					
					$num_dev = 0;
					
					while($row = mysqli_fetch_array($result)){
						$num_dev++;
					}
					
					

			
			$query = "SELECT * FROM $cat WHERE id = $id";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);
					echo 
						
						'<div class="titolo_content">'.$row['nome'].'</div>'.
                    
               				'<div class="device_image">'.
                    			'<img class="" src="images/devices/'.$row['image_front'] .'">'.'<br>'.'<br>'.
								 $row['prezzo'] .' €'.'<br>'.'<br>'.
								 'COLORE: '. $row['colore'] .'<br>'.'<br>'.
								 '<img src="images/ACQUISTA.JPG">'.'<br>'.'<br>'.
								 'SPECIFICHE: <br>'. $row['specifiche'] .
               				'</div>'.
                
                		'<div class="device_description">'.
                    
                    	'<p>'.
                   			'MARCA: '. $row['marca'] . '<br>'.'<br>'.'<br>'.
							'DESCRIZIONE: <br>'.'<br>'. $row['descrizione'] . '<br>'.
                    	'</p>'.
						//link ai servizi SL
						'<a href="AvailableSL.html?cat=' . $cat .'&id='. $id . '" >SCOPRI I SERVIZI SMARTLIFE DISPONIBILI PER QUESTO DISPOSITIVO!</a>'.
               			'<br><br><br>'.
						'<a href="Assistance.html?cat=supportotecnico&id=1">SERVE SUPPORTO TECNICO?</a>'.
				
                		'</div>';
					
                	echo
                	'<div id="link_style" class="prev_next_links">'.
							'<a href="DevicesByCategory.html?cat=' . $cat.'" >'.
							"vai a".'&nbsp;'. $cat .
							'</a>'.
							'</div>'.
						'</div>';
						
					
					if($id > 0){
						$prev = $id - 1;
                    	echo
							'<div class="device_link_prev">'.
                        		'<a href="Device.html?cat=' . $cat .'&id='. $prev . '" >'.
								'<img src="images/back.png">'.
								 '</a>'.
                   	 		'</div>';
					}
					
						
					
					
					if($id < $num_dev - 1){
						$next = $id + 1;
                    	echo
							'<div class="device_link_next">'.
                        		'<a href="Device.html?cat=' . $cat .'&id='. $next . '" >'.
								'<img src="images/next2.png">'.
								'</a>'.
                   	 		'</div>';
						}	
						
                    
                	echo
               		 	'</div>';
					 
					 
					 mysqli_close($db);
		}
			
			
			
			
			
			
			
			
			

?>