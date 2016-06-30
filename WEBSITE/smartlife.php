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
		
		//mostra SL By Category
		if($id === "null"){

			switch($cat){
				
        			//TV & DIVERTIMENTO
 					case "tv_divertimento":
       	 			$query = "SELECT * FROM tv_divertimento ";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
		 			
					echo '<h1>TV & DIVERTIMENTO<h1>';
		
					while ($row = mysqli_fetch_array($result)){
					
					if(($row['id'] % 2) == 0){
						echo
						'<div class ="smartlife">'.
                
                    		'<div class="sl_img_sx">'.
                        		'<img  src="images/' .$row['image1'].'" width="100%" height="100%">'.
                    		'</div>'.
                    
                   		 	'<div id="link_style" class="sl_descr_sx"> '.
                        		
								'<div class="sl_desc_title">'.
                        		$row['nomeSL'].
                        		'</div>'.
								
                        		'<p>'.
                    				$row['introduzione'].
                    			'</p>'.
								'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="SmartLife.html?cat=tv_divertimento&id=
										'.$row['id'].'">'.$row['nomeSL'].'</a>'.'&nbsp'."!".
                    			'</p>'.
								
                    		'</div>'.
                
						'</div>';
						
						}
						
						else{
							
							echo
						'<div class ="smartlife">'.
                
                    		'<div class="sl_img_dx">'.
                        		'<img  src="images/' .$row['image1'].'" width="100%" height="280px">'.
	               		'</div>'.
                    
                   		 	'<div id="link_style" class="sl_descr_dx"> '.
                        		
								'<div class="sl_desc_title">'.
                        		$row['nomeSL'].
                        		'</div>'.
								
                        		'<p>'.
                    				$row['introduzione'].
                    			'</p>'.
								'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="SmartLife.html?cat=tv_divertimento&id=
										'.$row['id'].'">'.$row['nomeSL'].'</a>'.'&nbsp'."!".
                    			'</p>'.
								
                    		'</div>'.
                
                		'</div>';
							
							
							}
					
						}
						//qui devo mettere i link alle pagine prev e next		
                    	echo
							'<div id="link_style" class="link_sl_next">'.
								"vai a".'&nbsp'.
                        		'<a href="SLbyCategory.html?cat=salutebenessere" >'. "SALUTE & BENESSERE"
								."!".
								'</a>'.
                   	 		'</div>';
							
		
					mysqli_close($db);
        
        			break;
        
        
        			//CASA & FAMIGLIA
    				case "casafamiglia":    
					$query = "SELECT * FROM casafamiglia";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					echo '<h1>CASA & FAMIGLIA<h1>';
		
					while ($row = mysqli_fetch_array($result)){
		
					
					  if(($row['id'] % 2) == 0){
						echo
						'<div class ="smartlife">'.
                
                    		'<div class="sl_img_sx">'.
                        		'<img  src="images/devices/' .$row['image1'].'" width="70%" height="250px">'.
                    		'</div>
                    
                   		 	<div id="link_style_NI" class="sl_descr_sx"> '.
                        		
								'<div class="sl_desc_title">'.
                        		$row['nomeSL'].
                        		'</div>'.
                        
                        			'<p>'.
                    					$row['introduzione'].
                    				'</p>'.
									'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="#">'.$row['nomeSL'].'</a>'.'&nbsp'."!".
                    				'</p>'.
                    		'</div>'.
                
                		'</div>';
						
						}
						
						else{
							
							echo
						'<div class ="smartlife">'.
                
                    		'<div class="sl_img_dx">'.
                        		'<img  src="images/devices/' .$row['image1'].'" width="70%" height="250px">'.
                    		'</div>
                    
                   		 	<div id="link_style_NI" class="sl_descr_dx"> '.
                        
                        		'<div class="sl_desc_title">'.
                        		$row['nomeSL'].
                        		'</div>'.
                        
                        			'<p>'.
                    					$row['introduzione'].
                    				'</p>'.
									'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="#">'.$row['nomeSL'].
									'</a>'.'&nbsp'."!".              
									'</p>'.
									
                    		'</div>'.
                
                		'</div>';
							
							
							}
					}
					
					//qui devo mettere i link alle pagine prev e next		
                    	echo
							'<div id="link_style" class="link_sl_prev_casafamiglia">'.
								"vai a".'&nbsp'.
                        		'<a href="SLbyCategory.html?cat=salutebenessere" >'. "SALUTE & BENESSERE"
								."!".
								'</a>'.
                   	 		'</div>'.
								
							'<div id="link_style" class="link_sl_next_casafamiglia">'.
								"vai a".'&nbsp'.
                        		'<a href="SLbyCategory.html?cat=serviziallapersona" >'. "SERVIZI alla PERSONA"
								."!".
								'</a>'.
						'</div>';
		
					mysqli_close($db);
       
	    			break;
        
        			//SALUTE & BENESSERE
    				case "salutebenessere":
        			$query = "SELECT * FROM salutebenessere";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					echo '<h1>SALUTE & BENESSERE<h1>';
		
					while ($row = mysqli_fetch_array($result)){
		
					
					  if(($row['id'] % 2) == 0){
						echo
						'<div class ="smartlife">'.
                
                    		'<div class="sl_img_sx">'.
                        		'<img  src="images/devices/' .$row['image1'].'" width="40%" height="200px">'.
                    		'</div>
                    
                   		 	<div id="link_style_NI" class="sl_descr_sx"> '.
                        		
								'<div class="sl_desc_title">'.
                        		$row['nomeSL'].
                        		'</div>'.
                        
                        			'<p>'.
                    					$row['introduzione'].
                    				'</p>'.
									'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="#">'.$row['nomeSL'].'</a>'.'&nbsp'."!".
                    				'</p>'.
                    		'</div>'.
                
                		'</div>';
						
						}
						
						else{
							
						echo
						'<div class ="smartlife">'.
                
                    		'<div class="sl_img_dx">'.
                        		'<img  src="images/devices/' .$row['image1'].'" width="70%" height="200px">'.
                    		'</div>
                    
                   		 	<div id="link_style_NI" class="sl_descr_dx"> '.
                        
                        		'<div class="sl_desc_title">'.
                        		$row['nomeSL'].
                        		'</div>'.
                        
                        			'<p>'.
                    					$row['introduzione'].
                    				'</p>'.
									'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="#">'.$row['nomeSL'].'</a>'.'&nbsp'."!".
                    				'</p>'.
									
                    		'</div>'.
                
                		'</div>';
							
							
						}
					}
					
					mysqli_close($db);
						
					//qui devo mettere i link alle pagine prev e next		
                    	echo
							'<div id="link_style" class="link_sl_prev">'.
								"vai a".'&nbsp'.
                        		'<a href="SLbyCategory.html?cat=tv_divertimento" >'. "TV & DIVERTIMENTO"
								."!".
								'</a>'.
                   	 		'</div>'.
								
							'<div id="link_style" class="link_sl_next">'.
								"vai a".'&nbsp'.
                        		'<a href="SLbyCategory.html?cat=casafamiglia" >'. "CASA & FAMIGLIA"
								."!".
								'</a>'.
						'</div>';
       
	    			break;
        
        			//SERVIZI ALLA PERSONA
    				case "serviziallapersona":
        			$query = "SELECT * FROM serviziallapersona";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					echo '<h1>SERVIZI ALLA PERSONA<h1>';
		
					while ($row = mysqli_fetch_array($result)){
		
					
					  if(($row['id'] % 2) == 0){
						echo
						'<div class ="smartlife">'.
                
                    		'<div class="sl_img_sx">'.
                        		'<img  src="images/' .$row['image1'].'" width="70%" height="250px">'.
                    		'</div>
                    
                   		 	<div id="link_style_NI" class="sl_descr_sx"> '.
                        		
								'<div class="sl_desc_title">'.
                        		$row['nomeSL'].
                        		'</div>'.
                        
                        			'<p>'.
                    					$row['introduzione'].
                    				'</p>'.
									'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="#">'.$row['nomeSL'].'</a>'.'&nbsp'."!".
                    				'</p>'.
                    		'</div>'.
                
                		'</div>';
						
						}
						
						else{
							
						echo
						'<div class ="smartlife">'.
                
                    		'<div class="sl_img_dx">'.
                        		'<img  src="images/' .$row['image1'].'" width="70%" height="250px">'.
                    		'</div>
                    
                   		 	<div id="link_style_NI" class="sl_descr_dx"> '.
                        
                        		'<div class="sl_desc_title">'.
                        		$row['nomeSL'].
                        		'</div>'.
                        
                        			'<p>'.
                    					$row['introduzione'].
                    				'</p>'.
									'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="#">'.$row['nomeSL'].'</a>'.'&nbsp'."!".
                    				'</p>'.
									
                    		'</div>'.
                
                		'</div>';
							
							
							}	
					}
					//qui devo mettere i link alle pagine prev e next		
                    	echo
							'<div id="link_style" class="link_sl_prev">'.
								"vai a".'&nbsp'.
                        		'<a href="SLbyCategory.html?cat=casafamiglia" >'. "CASA & FAMIGLIA"
								."!".
								'</a>'.
                   	 		'</div>';
		
					mysqli_close($db);
       
	    			break;
        			
               
			}
		}
		else {
					$query = "SELECT * FROM $cat WHERE id = $id";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);
					
					echo 
						'<div class="titolo_content">'.$row['nomeSL'].'</div>'.
                    
               				'<div class="SL_image">'.
                    			'<img class="SL_image1" src="images/'.$row['image1'] .' " ">'.'<br>'.'<br>'.
								
								'<img class="SL_image2" src="images/'.$row['image2'] .' ">'.'<br>'.'<br>';
										
								if($id == "0"){
									//video per netflix
									echo 
									'<iframe class="SL_image3" src="'.$row['video'].'
										?rel=0&autoplay=1&controls=1&autohide=1">'
									.'</iframe>';
								} else {
									//img
									echo
									'<img class="SL_image3" src="images/'.$row['image3'] .' ">'.'<br>'.'<br>';
								}
								echo
								'<div id="link_style" class="link_sl_prev">'.
								"vai a".'&nbsp'.
                        		'<a href="NeededDev.html?cat='.$cat.'&id='.$id.'" >'. "ATTIVABILE su"
								."!".
								'</a>'.
                   	 		'</div>'.
							'<div id="link_style" class="link_sl_prev">'.
								"vai a".'&nbsp'.
                        		'<a href="ActivationRules.html?cat='.$cat.'&id='.$id.'" >'. "ATTIVAZIONE e REGOLE"
								."!".
								'</a>'.
                   	 		'</div>'.
															
               				'</div>'.
                
                		'<div class="device_description">'.
                    
                    	'<p>'.
							'DESCRIZIONE: <br>'.'<br>'. $row['descrizione'] . '<br>'.
							'<div id="link_style" class="link_sl_prev">'.
								"vai a".'&nbsp'.
                        		'<a href="SLbyCategory.html?cat='.$cat.'" >'. $cat
								."!".
								'</a>'.
                   	 		'</div>'.
                    	'</p>'.
                
                		'</div>';
						
						 mysqli_close($db);
		}
?>