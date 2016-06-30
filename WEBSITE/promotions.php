<?php
	header('Access-Control-Allow-Origin: *');
	echo '<div class="titolo_content">QUI TROVI I NOSTRI PRODOTTI E SERVIZI IN PROMOZIONE!
			<img src="images/offer1.jpg.png">
			</div>';
			
	//connessione
		$username = "hypprojectbancalecassani";
        $password = "caspodufcu46";
        $host = "localhost";
        $database = "my_hypprojectbancalecassani";
     
          $db = mysqli_connect($host, $username, $password, $database) or die("Errore durante la connessione al database");
				
		  if (mysqli_connect_errno()) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
		   }
		   
		
		$query = "SELECT * FROM smartphone ";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
		
			while ($row = mysqli_fetch_array($result)){
				
				if($row['promotion'] == '1' ){
					
					echo '<div class ="smartlife">'.
                
                    		'<div class="sl_img_sx">'.
                        		'<img  src="images/devices/' .$row['image_front'].'" width="30%" height="30%">'.
                    		'</div>'.
                    
                   		 	'<div id="link_style" class="sl_descr_sx"> '.
                        		
								'<div class="sl_desc_title">'.
                        		$row['nome'].
                        		'</div>'.
								
                        		'<p>'.
                    				$row['descrizione'].
                    			'</p>'.
								'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="Device.html?cat=smartphone&id=
										'.$row['id'].'">'.$row['nome'].'</a>'.'&nbsp'."!".
                    			'</p>'.
								
                    		'</div>'.
                
					'</div>';
					}
				}
			
			$query = "SELECT * FROM Tablet ";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
		
			while ($row = mysqli_fetch_array($result)){
				
				if($row['promotion'] == '1' ){
					
					echo '<div class ="smartlife">'.
                
                    		'<div class="sl_img_sx">'.
                        		'<img  src="images/devices/' .$row['image_front'].'" width="30%" height="30%">'.
                    		'</div>'.
                    
                   		 	'<div id="link_style" class="sl_descr_sx"> '.
                        		
								'<div class="sl_desc_title">'.
                        		$row['nome'].
                        		'</div>'.
								
                        		'<p>'.
                    				$row['descrizione'].
                    			'</p>'.
								'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="Device.html?cat=Tablet&id=
										'.$row['id'].'">'.$row['nome'].'</a>'.'&nbsp'."!".
                    			'</p>'.
								
                    		'</div>'.
                
					'</div>';
					}
				}
				
				$query = "SELECT * FROM modem ";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
		
			while ($row = mysqli_fetch_array($result)){
				
				if($row['promotion'] == '1' ){
					
					echo '<div class ="smartlife">'.
                
                    		'<div class="sl_img_sx">'.
                        		'<img  src="images/devices/' .$row['image_front'].'" width="30%" height="30%">'.
                    		'</div>'.
                    
                   		 	'<div id="link_style" class="sl_descr_sx"> '.
                        		
								'<div class="sl_desc_title">'.
                        		$row['nome'].
                        		'</div>'.
								
                        		'<p>'.
                    				$row['descrizione'].
                    			'</p>'.
								'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="Device.html?cat=modem&id=
										'.$row['id'].'">'.$row['nome'].'</a>'.'&nbsp'."!".
                    			'</p>'.
								
                    		'</div>'.
                
					'</div>';
					}
				}
				
				$query = "SELECT * FROM tv_smartliving ";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
		
			while ($row = mysqli_fetch_array($result)){
				
				if($row['promotion'] == '1' ){
					
					echo '<div class ="smartlife">'.
                
                    		'<div class="sl_img_sx">'.
                        		'<img  src="images/devices/' .$row['image_front'].'" width="30%" height="30%">'.
                    		'</div>'.
                    
                   		 	'<div id="link_style" class="sl_descr_sx"> '.
                        		
								'<div class="sl_desc_title">'.
                        		$row['nome'].
                        		'</div>'.
								
                        		'<p>'.
                    				$row['descrizione'].
                    			'</p>'.
								'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="Device.html?cat=tv_smartliving&id=
										'.$row['id'].'">'.$row['nome'].'</a>'.'&nbsp'."!".
                    			'</p>'.
								
                    		'</div>'.
                
					'</div>';
					}
				}
				
				$query = "SELECT * FROM discount ";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
		
			while ($row = mysqli_fetch_array($result)){
				
				if($row['promotion'] == '1' ){
					
					echo '<div class ="smartlife">'.
                
                    		'<div class="sl_img_sx">'.
                        		'<img  src="images/devices/' .$row['image_front'].'" width="30%" height="30%">'.
                    		'</div>'.
                    
                   		 	'<div id="link_style" class="sl_descr_sx"> '.
                        		
								'<div class="sl_desc_title">'.
                        		$row['nome'].
                        		'</div>'.
								
                        		'<p>'.
                    				$row['descrizione'].
                    			'</p>'.
								'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="Device.html?cat=discount&id=
										'.$row['id'].'">'.$row['nome'].'</a>'.'&nbsp'."!".
                    			'</p>'.
								
                    		'</div>'.
                
					'</div>';
					}
				}
				
				$query = "SELECT * FROM tv_divertimento ";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
		
			while ($row = mysqli_fetch_array($result)){
				
				if($row['promotion'] == '1' ){
					
					echo '<div class ="smartlife">'.
                
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
				}
				
				$query = "SELECT * FROM salutebenessere ";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
		
			while ($row = mysqli_fetch_array($result)){
				
				if($row['promotion'] == '1' ){
					
					echo '<div class ="smartlife">'.
                
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
				}
				
	$query = "SELECT * FROM casafamiglia ";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
		
			while ($row = mysqli_fetch_array($result)){
				
				if($row['promotion'] == '1' ){
					
					echo '<div class ="smartlife">'.
                
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
				}
				$query = "SELECT * FROM serviziallapersona ";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
		
			while ($row = mysqli_fetch_array($result)){
				
				if($row['promotion'] == '1' ){
					
					echo '<div class ="smartlife">'.
                
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
				}

?>