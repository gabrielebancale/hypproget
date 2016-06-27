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
     
		$query = "SELECT * FROM gestionelinea";
     	mysqli_query($db, $query) or die('Error querying database.');   
  		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
	
		while ($row = mysqli_fetch_array($result)){
			
			if($row['highlights'] == "1"){
				echo
					$row['servizio'];
			}
			
		}
		/*
		$query = "SELECT * FROM controllocosti";
     	mysqli_query($db, $query) or die('Error querying database.');   
  		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
	
		while ($row = mysqli_fetch_array($result)){
			
			if($row['highlights'] == "1"){
				echo
					$row['servizio'];
			}
			
		}
		
		$query = "SELECT * FROM supportotecnico";
     	mysqli_query($db, $query) or die('Error querying database.');   
  		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
	
		while ($row = mysqli_fetch_array($result)){
			
			if($row['highlights'] == "10"){
				echo
					$row['servizio'];
			}
			
		}
		
		$query = "SELECT * FROM smartlife";
     	mysqli_query($db, $query) or die('Error querying database.');   
  		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_array($result);
	
		while ($row = mysqli_fetch_array($result)){
			
			if($row['highlights'] == "1"){
				echo
					$row['servizio'];
			}
			
		}
		*/
		 mysqli_close($db);


?>