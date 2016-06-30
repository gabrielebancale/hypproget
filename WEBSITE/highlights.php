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
     
	 	//parte statica della pagina
	 	echo
	 	'<table id="highlights_table_1" cellpadding="0" cellspacing="0">'.
                	'<tr>'.
                    	'<td>'. 
                        	'<img src="images/highlights.jpg" width="100%" height="100%"/>'.
                        '</td>'.
                        '<td id="img_highlights">'.
							'<p>'."I SERVIZI DI ASSISTENZA".'<br>'."PIU' UTILIZZATI".'</p>'.
							'<img src="images/assistenzatecnica2.jpg" width="100%" height="50%"/>'.
                        '</td>'.
                    '</tr>'.
		'</table>'.
		'<table id="highlights_table" cellpadding="0" cellspacing="0">'.
                    '<tr>'.
                    	'<td>'.
                        	'<img src="images/highlights.png" width="100%" height="100%"/>'.
                        '</td>'.
                        '<td>'.
                        	'<img src="images/ricarica1.PNG" width="100%" height="100%"/>'.
                        '</td>'.
                        '<td>'.
                        	'<img src="images/highlights3.jpg" width="100%" height="100%"/>'.
                        '</td>'.
                    '</tr>'.
          '</table>';        
	 
	 	//nomi dei servizi di assistenza più utilizzati
		$query = "SELECT * FROM gestionelinea";
     	mysqli_query($db, $query) or die('Error querying database.');   
  		$result = mysqli_query($db, $query);
	
		while ($row = mysqli_fetch_array($result)){
			
			if($row['highlights'] == "1"){
				echo '<div class ="gestionelinea">'.
                    		
                 	'<div id="link_style"> '.
                       		
						'<p>'.
							'<a href="Assistance.html?cat=gestionelinea&id=
								'.$row['id'].'">'.$row['servizio'].'</a>'.
                		'</p>'.
                	'</div>'.
				'</div>';
			}
			
		}
		
		$query = "SELECT * FROM controllocosti";
     	mysqli_query($db, $query) or die('Error querying database.');   
  		$result = mysqli_query($db, $query);
	
		while ($row = mysqli_fetch_array($result)){
			
			if($row['highlights'] == "1"){
				echo '<div class ="controllocosti">'.
                    		
                 	'<div id="link_style"> '.
                       		
						'<p>'.
							'<a href="Assistance.html?cat=controllocosti&id=
								'.$row['id'].'">'.$row['servizio'].'</a>'.
                		'</p>'.
                	'</div>'.
				'</div>';
			}
			
		}
		
		$query = "SELECT * FROM supportotecnico";
     	mysqli_query($db, $query) or die('Error querying database.');   
  		$result = mysqli_query($db, $query);
	
		while ($row = mysqli_fetch_array($result)){
			
			if($row['highlights'] == "1"){
				echo '<div class = "supportotecnico">'.
                    		
                 	'<div id="link_style"> '.
                       		
						'<p>'.
							'<a href="Assistance.html?cat=supportotecnico&id=
								'.$row['id'].'">'.$row['servizio'].'</a>'.
                		'</p>'.
                	'</div>'.
				'</div>';
			}
			
		}
		
		$query = "SELECT * FROM smartlife";
     	mysqli_query($db, $query) or die('Error querying database.');   
  		$result = mysqli_query($db, $query);
	
		while ($row = mysqli_fetch_array($result)){
			
			if($row['highlights'] == "1"){
				echo '<div class ="smartlife">'.
                    		
                 	'<div id="link_style"> '.
                       		
						'<p>'.
							'<a href="Assistance.html?cat=smartlife&id=
								'.$row['id'].'">'.$row['servizio'].'</a>'.
                		'</p>'.
                	'</div>'.
				'</div>';
			}
			
		}
		
		 mysqli_close($db);


?>