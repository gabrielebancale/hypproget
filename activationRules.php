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
		
		$query = "SELECT * FROM $cat WHERE id = $id";
  		 			mysqli_query($db, $query) or die('Error querying database.');   
    	 			$result = mysqli_query($db, $query);
					$row = mysqli_fetch_array($result);
		
		//NETFLIX
		if($id === "0"){
			
		echo 
			'<div class="activation_image">'.
				'<img src="images/'.$row['image1'].'" width="100%" height="100%">'.
			'</div>'.'<br>';
			
		//link per tornare alla relativa descrizione
		echo
			'<br>'.'<br>'.
			'<div class="link_sl_prev">'.
           		'<a href="SmartLife.html?cat='.$cat. '&id='. $id .'" >'. "vai alla DESCRIZIONE !".'</a>'.
        	'</div>';
	
		//link per scoprire i devices sui quali attivare il servizio di SL
		echo
			'<br>'.'<br>'.
			'<div class="link_sl_prev">'.
           		'<a href="#" >'. "ATTIVABILE SU !".'</a>'.
        	'</div>';
			
		//contenuti 
		echo
		'<table id="netflix" border="0">'.
			'<tr>'.
				'<td>'.
					'<img src="images/'.$row['image3'].'" width="50%" height="100%">'.
				'</td>'.
				'<td>'.
					'<img src="images/'.$row['image4'].'" width="50%" height="100%">'.
				'</td>'.
				'<td>'.
					'<img src="images/'.$row['image5'].'" width="50%" height="100%">'.
				'</td>'.
			'</tr>'	.
			'<tr>'.
				'<td>'.$row['activation'].
				'</td>'.
				'<td>'.$row['activation2'].
				'</td>'.
				'<td>'.$row['activation3'].
				'</td>'.
			'</tr>'.
		'</table>';
			
		//link per tornare alla relativa SL
		echo
			'<br>'.'<br>'.
			'<div class="link_sl_prev">'.
				"vai a".'&nbsp'. 
           		'<a href="SLbyCategory.html?cat='.$cat. '&id='. $id .'" >'. $cat
				."!".
				'</a>'.
        	'</div>';
			
		//TIM GAMES
		} else {
			
			echo 
			'<br>'.
			'<div class="activation_image">'.
				'<img src="images/'.$row['image2'].'" width="100%" height="200px">'.'<br>'.'<br>'.'<br>'.
				'<img src="images/'.$row['image3'].'" width="100%" height="200px">'.
			'</div>'.'<br>';
			
		//link per tornare alla relativa descrizione
		echo
			'<br>'.'<br>'.
			'<div class="link_sl_prev">'.
           		'<a href="SmartLife.html?cat='.$cat. '&id='. $id .'" >'. "vai alla DESCRIZIONE !".'</a>'.
        	'</div>';
	
		//link per scoprire i devices sui quali attivare il servizio di SL
		echo
			'<br>'.'<br>'.
			'<div class="link_sl_prev">'.
           		'<a href="#" >'. "ATTIVABILE SU !".'</a>'.
        	'</div>';
			
		//contenuti 
		echo
		'<div id="activation" class="content">'
			.$row['activation'].'<br>'.'<br>'.
		'</div>';
			
		//link per tornare alla relativa SL
		echo
			'<br>'.'<br>'.
			'<div id="linkSLTimGames" class="link_sl_prev">'.
				"vai a".'&nbsp'. 
           		'<a href="SLbyCategory.html?cat='.$cat. '&id='. $id .'" >'. $cat
				."!".
				'</a>'.
        	'</div>';

		}

		 mysqli_close($db);


?>