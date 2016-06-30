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
					
			echo '<div class="titolo_content">Scopri i migliori dispositivi sui quali attivare <br>'.$row['nomeSL'].'!</div>';
		   
		   
		   $catDEV = $row['catDEVassociato'];
		   $idDEV = $row['idDEVassociato'];
		   $nome_sl = $row['nomeSL'];
		
		if($catDEV != "default"){
			$arrayID = explode ('-', $idDEV);
			
			$num_SL = count($arrayID);
			
			$i = 0;
			
			while ($i < $num_SL){
				
				$query = "SELECT * FROM $catDEV WHERE id = $arrayID[$i]";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);
					
					echo '<div class ="smartlife">'.
                
                    		'<div class="sl_img_sx">'.
                        		'<img  src="images/devices/' .$row['image_front'].'" width="50%" height="50%">'.
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
									'<a href="Device.html?cat='.$catDEV.'&id=
										'.$arrayID[$i].'">'.$row['nome'].'</a>'.'&nbsp'."!".
                    			'</p>'.
								
                    		'</div>'.
                
					'</div>';
					
					$i = $i + 1;
				}
			
		}
		
		
		else{	
				echo 'default NESSUN DISPOSITIVO ASSOCIATO';
						
		}
		//da rivedere
		echo '<div id="link_style" class="device_link_prev">'.
             '<a href="SmartLife.html?cat=' . $cat .'&id='. $id . '" >'.
			 'TORNA ALLA PAGINA INTRODUTTIVA DI  '.$nome_sl.
			 '</a>'.
             '</div>';
		

		 mysqli_close($db);
		   
?>