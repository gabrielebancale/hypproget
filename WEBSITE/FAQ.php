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
					
		echo 
			'<div class="titolo_content">'.$row['servizio'].'</div>'.'<br>'.
			'<div class="content">'.$row['FAQ'].'</div>';
			
		//link per tornare alla relativa assistenza
		echo
			'<br>'.'<br>'.
			'<div id="link_style" class="link_sl_prev">'.
				"vai a".'&nbsp'.
           		'<a href="Assistance.html?cat='.$cat. '&id='. $id .'" >'. $row['servizio']
				."!".
				'</a>'.
        	'</div>';
	

		 mysqli_close($db);


?>