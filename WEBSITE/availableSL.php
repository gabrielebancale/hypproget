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
		
		$query = "SELECT * FROM $cat WHERE id = $id";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);
		
		echo '<div class="titolo_content"> I nostri servizi disponibili per ' . $row['nome']. '! </diiv>'; 
		
		$nomeSL = $row['nomeSLassociata'];
		$idSL = $row['idSLassociata'];
		$nome_dev = $row['nome'];
		
		if($nomeSL != "default"){
			$arrayID = explode ('-', $idSL);
			
			$num_SL = count($arrayID);
			
			$i = 0;
			
			while ($i < $num_SL){
				
				$query = "SELECT * FROM $nomeSL WHERE id = $arrayID[$i]";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);
					
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
									'<a href="SmartLife.html?cat='.$nomeSL.'&id=
										'.$arrayID[$i].'">'.$row['nomeSL'].'</a>'.'&nbsp'."!".
                    			'</p>'.
								
                    		'</div>'.
                
					'</div>';
					
					$i = $i + 1;
				}
			
		}
		
		
		else{	//netflix e TIMgames di default
				$nomeSL = "tv_divertimento";
				$arrayID[0] = '0';
				$arrayID[1] = '1';
				$num_SL = count($arrayID);
				
				$i = 0;
			
			while ($i < $num_SL){
				
				$query = "SELECT * FROM $nomeSL WHERE id = $arrayID[$i]";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);
					
					echo '<div class ="smartlife">'.
                
                    		'<div id="link_style" class="sl_img_sx">'.
                        		'<img  src="images/' .$row['image1'].'" width="100%" height="100%">'.
                    		'</div>'.
                    
                   		 	'<div class="sl_descr_sx"> '.
                        		
								'<div class="sl_desc_title">'.
                        		$row['nomeSL'].
                        		'</div>'.
								
                        		'<p>'.
                    				$row['introduzione'].
                    			'</p>'.
								'<p>'.
                    				"scopri ".'&nbsp'.
									'<a href="SmartLife.html?cat='.$nomeSL.'&id=
										'.$arrayID[$i].'">'.$row['nomeSL'].'</a>'.'&nbsp'."!".
                    			'</p>'.
								
                    		'</div>'.
                
					'</div>';
					
					$i = $i + 1;
				}
				
		}
		//da rivedere
		echo '<div id="link_style" class="device_link_prev">'.
             '<a href="Device.html?cat=' . $cat .'&id='. $id . '" >'.
			 'TORNA ALLE CARATTERISTICHE DI '.$nome_dev.
			 '</a>'.
             '</div>';
		
		

		 mysqli_close($db);


?>