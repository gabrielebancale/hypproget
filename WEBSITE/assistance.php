<link href="style.css" rel="stylesheet" type="text/css" />
<?php
		header('Access-Control-Allow-Origin: *');
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
		$aux = 0;
		$aux1 = 0;
		$aux2 = 0;
		$aux3 = 0;
		$tipo_servizio = "null";
		
		//mostra Assistance By Category
		if($id === "null"){

			switch($cat){
				
        			//GESTIONE LINEA
 					case "gestionelinea":
       	 			$query = "SELECT * FROM gestionelinea ";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					
					echo '<h1>GESTIONE LINEA E SERVIZI<h1>';
		
					while ($row = mysqli_fetch_array($result)){
		
						//mi serve per stampare il tipo di linea solo una volta
						if($row['tipolinea'] == "FISSO"){
		
							if($aux === 0){
							
								echo
									'<div class="tipolinea">'.
										$row['tipolinea'].'<br>'.
									'</div>';	
								$aux++;			
							}
							
							//la prima volta entro di default, poi solo se la categoria è uguale alla precedente
							if($row['tiposervizio'] != $tipo_servizio || $row['tiposervizio'] === "null")	{
							
								echo								
									'<div class="tiposervizio">'.
										$row['tiposervizio'].'<br>'.
									'</div>';
							}
							
							//servizio lo devo stampare sempre
							echo
								'<div id="link_style" class="servizio">'.
									'<a href="Assistance.html?cat=gestionelinea&id=
										'.$row['id'].'">'. 
									$row['servizio'].'</a>'.'<br>'.
								'</div>';
							
							$tipo_servizio = $row['tiposervizio'];
							
						} else {
							
							if($aux1 === 0){
							
								echo
									'<div class="tipolinea">'.
										$row['tipolinea'].'<br>'.
									'</div>';	
								$aux1++;			
							}
							
							//la prima volta entro di default, poi solo se la categoria è uguale alla precedente
							if($row['tiposervizio'] != $tipo_servizio || $row['tiposervizio'] === "null")	{
							
								echo
									'<div class="tiposervizio">'.
										$row['tiposervizio'].'<br>'.
									'</div>';
							}
							
							//servizio lo devo stampare sempre
							echo
								'<div id="link_style" class="servizio">'.
									'<a href="Assistance.html?cat=gestionelinea&id=
										'.$row['id'].'">'. 
									$row['servizio'].'</a>'.'<br>'.
								'</div>';
							
							$tipo_servizio = $row['tiposervizio'];
							
						}
						
					}
									
					echo 
						'<div id="link_style" class="prev_next_links">
                    	<div class="device_link_prev">
                        </div>
                    	<div class="device_link_next">
                        <a href="AssistancebyCategory.html?cat=controllocosti"> <h3>CONTROLLO COSTI
						 & <br/>PAGAMENTI</h3> </a>
						</div>
                		</div>';
		
					mysqli_close($db);
        
        			break;
        
        
        			//CONTROLLO COSTI
    				case "controllocosti":    
					$query = "SELECT * FROM controllocosti";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					echo '<h1>CONTROLLO COSTI & PAGAMENTI<h1>';
		
					while ($row = mysqli_fetch_array($result)){
		
    					//mi serve per stampare il tipo di linea solo una volta
						if($row['tipolinea'] == "FISSO"){
		
							if($aux === 0){
							
								echo
									'<div class="tipolinea">'.
										$row['tipolinea'].'<br>'.
									'</div>';	
								$aux++;			
							}
							
							//la prima volta entro di default, poi solo se la categoria è uguale alla precedente
							if($row['tiposervizio'] != $tipo_servizio || $row['tiposervizio'] === "null")	{
							
								echo								
									'<div class="tiposervizio">'.
										$row['tiposervizio'].'<br>'.
									'</div>';
							}
							
							//servizio lo devo stampare sempre
							echo
								'<div id="link_style" class="servizio">'.
									'<a href="Assistance.html?cat=controllocosti&id=
										'.$row['id'].'">'. 
									$row['servizio'].'</a>'.'<br>'.
								'</div>';
							
							$tipo_servizio = $row['tiposervizio'];
							
						} else {
							
							if($aux1 === 0){
							
								echo
									'<div class="tipolinea">'.
										$row['tipolinea'].'<br>'.
									'</div>';	
								$aux1++;			
							}
							
							//la prima volta entro di default, poi solo se la categoria è uguale alla precedente
							if($row['tiposervizio'] != $tipo_servizio || $row['tiposervizio'] === "null")	{
							
								echo
									'<div class="tiposervizio">'.
										$row['tiposervizio'].'<br>'.
									'</div>';
							}
							
							//servizio lo devo stampare sempre
							echo
								'<div id="link_style" class="servizio">'.
									'<a href="Assistance.html?cat=controllocosti&id=
										'.$row['id'].'">'. 
									$row['servizio'].'</a>'.'<br>'.
								'</div>';
							
							$tipo_servizio = $row['tiposervizio'];
							
						}
						
					}
									
					echo 
						'<div id="link_style" class="prev_next_links">
                    	<div class="device_link_prev">
						<a href="AssistancebyCategory.html?cat=gestionelinea"> <h3>GESTIONE LINEA
						 & <br/>SERVIZI</h3> </a>
                        </div>
                    	<div class="device_link_next">
                        <a href="AssistancebyCategory.html?cat=supportotecnico"> <h3>SUPPORTO TECNICO
						 & <br/>CONFIG.</h3> </a>
						</div>
                		</div>';
		
					mysqli_close($db);
        
        			break;
       
	    			break;
        
        			//SUPPORTO TECNICO
    				case "supportotecnico":
        			$query = "SELECT * FROM supportotecnico";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					echo '<h1>SUPPORTO TECNICO<h1>';
		
					while ($row = mysqli_fetch_array($result)){
		
    					//mi serve per stampare il tipo di linea solo una volta
						if($row['tipolinea'] == "SMARTPHONE & TABLET"){
		
							if($aux === 0){
							
								echo
									'<div class="tipolinea">'.
										$row['tipolinea'].'<br>'.
									'</div>';	
								$aux++;			
							}
							
							//la prima volta entro di default, poi solo se la categoria è uguale alla precedente
							if($row['tiposervizio'] != $tipo_servizio || $row['tiposervizio'] === "null")	{
							
								echo								
									'<div class="tiposervizio">'.
										$row['tiposervizio'].'<br>'.
									'</div>';
							}
							
							//servizio lo devo stampare sempre
							echo
								'<div id="link_style" class="servizio">'.
									'<a href="Assistance.html?cat=supportotecnico&id=
										'.$row['id'].'">'. 
									$row['servizio'].'</a>'.'<br>'.
								'</div>';
							
							$tipo_servizio = $row['tiposervizio'];
							
						} else {
							
							if($aux1 === 0){
							
								echo
									'<div class="tipolinea">'.
										$row['tipolinea'].'<br>'.
									'</div>';	
								$aux1++;			
							}
							
							//la prima volta entro di default, poi solo se la categoria è uguale alla precedente
							if($row['tiposervizio'] != $tipo_servizio || $row['tiposervizio'] === "null")	{
							
								echo
									'<div class="tiposervizio">'.
										$row['tiposervizio'].'<br>'.
									'</div>';
							}
							
							//servizio lo devo stampare sempre
							echo
								'<div id="link_style" class="servizio">'.
									'<a href="Assistance.html?cat=supportotecnico&id=
										'.$row['id'].'">'. 
									$row['servizio'].'</a>'.'<br>'.
								'</div>';
							
							$tipo_servizio = $row['tiposervizio'];
							
						}
						
					}
		
					echo 
						'<div id="link_style" class="prev_next_links">
                    	<div class="device_link_prev">
                        <a href="AssistancebyCategory.html?cat=controllocosti">
							 <h3>CONTROLLO COSTI & <br/>PAGAMENTI</h3> </a>
                    	</div>
                    	<div class="device_link_next">
                   		<a href="AssistancebyCategory.html?cat=smartlife"><h3>SMART LIFE</h3></a>
                    	</div>
                		</div>';
		
					mysqli_close($db);
        
        			break;
        
        			//SMART LIFE
    				case "smartlife":
        			$query = "SELECT * FROM smartlife";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					echo '<h1>SMART LIFE<h1>';
		
					while ($row = mysqli_fetch_array($result)){
		
    					//mi serve per stampare il tipo di linea solo una volta
						if($row['tipolinea'] == "TIM GAMES"){
		
							if($aux === 0){
							
								echo
									'<div class="tipolinea">'.
										$row['tipolinea'].'<br>'.
									'</div>';	
								$aux++;			
							}
							
							//la prima volta entro di default, poi solo se la categoria è uguale alla precedente
							if($row['tiposervizio'] != $tipo_servizio || $row['tiposervizio'] === "null")	{
							
								echo								
									'<div class="tiposervizio">'.
										$row['tiposervizio'].'<br>'.
									'</div>';
							}
							
							//servizio lo devo stampare sempre
							echo
								'<div id="link_style" class="servizio">'.
									'<a href="Assistance.html?cat=smartlife&id=
										'.$row['id'].'">'. 
									$row['servizio'].'</a>'.'<br>'.
								'</div>';
							
							$tipo_servizio = $row['tiposervizio'];
							
						}
						//mi serve per stampare il tipo di linea solo una volta
						else if($row['tipolinea'] == "TIM MUSIC"){
		
							if($aux2 === 0){
							
								echo
									'<div class="tipolinea">'.
										$row['tipolinea'].'<br>'.
									'</div>';	
								$aux2++;			
							}
							
							//la prima volta entro di default, poi solo se la categoria è uguale alla precedente
							if($row['tiposervizio'] != $tipo_servizio || $row['tiposervizio'] === "null")	{
							
								echo								
									'<div class="tiposervizio">'.
										$row['tiposervizio'].'<br>'.
									'</div>';
							}
							
							//servizio lo devo stampare sempre
							echo
								'<div id="link_style" class="servizio">'.
									'<a href="Assistance.html?cat=smartlife&id=
										'.$row['id'].'">'. 
									$row['servizio'].'</a>'.'<br>'.
								'</div>';
							
							$tipo_servizio = $row['tiposervizio'];
							
						}
						//mi serve per stampare il tipo di linea solo una volta
						else if($row['tipolinea'] == "TIM READING"){
		
							if($aux3 === 0){
							
								echo
									'<div class="tipolinea">'.
										$row['tipolinea'].'<br>'.
									'</div>';	
								$aux3++;			
							}
							
							//la prima volta entro di default, poi solo se la categoria è uguale alla precedente
							if($row['tiposervizio'] != $tipo_servizio || $row['tiposervizio'] === "null")	{
							
								echo								
									'<div class="tiposervizio">'.
										$row['tiposervizio'].'<br>'.
									'</div>';
							}
							
							//servizio lo devo stampare sempre
							echo
								'<div id="link_style" class="servizio">'.
									'<a href="Assistance.html?cat=smartlife&id=
										'.$row['id'].'">'. 
									$row['servizio'].'</a>'.'<br>'.
								'</div>';
							
							$tipo_servizio = $row['tiposervizio'];
							
						}	
						
						 else {
							
							if($aux1 === 0){
							
								echo
									'<div class="tipolinea">'.
										$row['tipolinea'].'<br>'.
									'</div>';	
								$aux1++;			
							}
							
							//la prima volta entro di default, poi solo se la categoria è uguale alla precedente
							if($row['tiposervizio'] != $tipo_servizio || $row['tiposervizio'] === "null")	{
							
								echo
									'<div class="tiposervizio">'.
										$row['tiposervizio'].'<br>'.
									'</div>';
							}
							
							//servizio lo devo stampare sempre
							echo
								'<div id="link_style" class="servizio">'.
									'<a href="Assistance.html?cat=smartlife&id=
										'.$row['id'].'">'. 
									$row['servizio'].'</a>'.'<br>'.
								'</div>';
							
							$tipo_servizio = $row['tiposervizio'];
							
						}
						
					}
					echo 
						'<div id="link_style" class="prev_next_links">
                   		<div class="device_link_prev">
                   		<a href="AssistancebyCategory.html?cat=supportotecnico">
							<h3>SUPPORTO TECNICO & <br/> CONFIGURAZIONE</h3></a>
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
						'<div class="titolo_content">'.$row['servizio'].'</div>'.
						'<br>'.'<br>'.
						'<div class="content">'.$row['content'].'</div>';
						
						if($row['image'] != "null"){
							echo
								'<div class="image_assistance">'.
									'<img src="images/'.$row['image'] .'">'.		
								'</div>';
						}
						
						echo
							'<br>'.'<br>'.'<br>';
						
						//link alle FAQ
						
						echo 
							'<div id="link_style" class="FAQ">'.
								'<a href="FAQ.html?cat=' . $cat . '&id='. $id .'">'. "FAQ". '</a>'.
							'</div>';
						
						echo
							'<br>'.'<br>'.'<br>';
							
						if($id > 0){
							$prev = $id - 1;
							echo
								'<div id="link_style" class="device_link_prev">'.
									'<a href="Assistance.html?cat=' . $cat .'&id='. $prev . '" >'.
									'<img src="images/back.png">'.
									 '</a>'.
								'</div>';
						}
						
						echo
							'<div id="link_style" class="link_sl_prev">'.
								"vai a".'&nbsp'.
                        		'<a href="AssistancebyCategory.html?cat='.$cat.'" >'. $cat
								."!".
								'</a>'.
                   	 		'</div>';
			
						if($id < $num_dev - 1){
							$next = $id + 1;
							echo
								'<div id="link_style" class="device_link_next">'.
									'<a href="Assistance.html?cat=' . $cat .'&id='. $next . '" >'.
									'<img src="images/next2.png">'.
									'</a>'.
								'</div>';
							}	
							
							
						 mysqli_close($db);
		}
					

?>