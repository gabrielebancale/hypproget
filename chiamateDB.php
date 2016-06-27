<?php
		$username = "hypprojectbancalecassani";
        $password = "caspodufcu46";
        $host = "localhost";
        $database = "my_hypprojectbancalecassani";
     
          $db = mysqli_connect($host, $username, $password, $database) or die("Errore durante la connessione al database");
				
		  if (mysqli_connect_errno()) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
		   }
     
$request = $_GET["q"];


switch($request){
        
        //----------------------DEVICES---------------------//
        
    case "smartphone":
       	 $query = "SELECT * FROM smartphone ";
  		 mysqli_query($db, $query) or die('Error querying database.');   
    	 $result = mysqli_query($db, $query);
		 //$link = "SELECT link_previous, link_next FROM smartphone ";
		 //mysqli_query($db, $link) or die('Error querying database.');   
    	 //$result2 = mysqli_query($db, $link);
		echo '<h1>SMARTPHONES<h1>';
		
		while ($row = mysqli_fetch_array($result)){
		
    	echo
		'<table width="35%" height="100%" border = "0" align="right">'. 
			'<tr>'.
				'<td width="30%" height="180px">'.
					'<img src="images/devices/'.$row['image_front'].'" width="70%" height="75%">'.
				'</td>'.
	
				'<td>'.
					'<a class="db_link" align="center" style="font-size:18px" 																																					            		href="AllDevicesCategories.html?tag=smartphone&id='.$row['id'].'">'.$row['nome'].'</a>'.
				'</td>'.
			'</tr>'.
		'</table>'
		;
		}
		
		echo '<div class="prev_next_links">
                    
                    <div class="device_link_prev">
                        
                    </div>
                    
                    <div class="device_link_next">
                        <a href="DevicesByCategory.html?cat=tablet"> <h3>TABLET & <br/>COMPUTER</h3> </a>
                    </div>
                
                </div>';
		
		//echo
		//'<table>'.'<tr>'.'<td>'.'</td>'.'<td>'.'</td>'.'<td>'.LINK.$result2['link_next'].'</td>'.'</tr>'.'</table>';
		mysqli_close($db);
        
        break;
        
        
        //----------------------TABLET---------------------//
        
    case "tablet":    
		
       	 $query = "SELECT * FROM Tablet";
  		 mysqli_query($db, $query) or die('Error querying database.');   
    	 $result = mysqli_query($db, $query);
		
		echo '<h1>TABLET<h1>';
		
		while ($row = mysqli_fetch_array($result)){
		
    	echo 
		'<table width="35%" height="100%" border = "0" align="right">'. 
			'<tr>'.
				'<td width="30%" height="180px">'.
					'<img src="images/devices/'.$row['image_front'].'" width="70%" height="75%">'.
				'</td>'.
	
				'<td>'.
					'<a class="db_link" align="center" style="font-size:18px" 																																					            		href="AllDevicesCategories.html?tag=Tablet&id='.$row['id'].'">'.$row['nome'].'</a>'.
				'</td>'.
			'</tr>'.
		'</table>'
		;
		}
		
		echo '<div class="prev_next_links">
                    
                    <div class="device_link_prev">
                         <a href="DevicesByCategory.html?cat=smartphone"> <h3>SMARTPHONE &<br/> TELEFONI</h3> </a>
                    </div>
                    
                    <div class="device_link_next">
                        <a href="DevicesByCategory.html?cat=modem"><h3>MODEM & <br/> NETWORKING</h3></a>
                    </div>
                
                </div>';
		
		mysqli_close($db);
       
	    break;
        
        //----------------------MODEM---------------------//
        
    case "modem":
        $query = "SELECT * FROM modem";
  		 mysqli_query($db, $query) or die('Error querying database.');   
    	 $result = mysqli_query($db, $query);
		
		echo '<h1>MODEM<h1>';
		
		while ($row = mysqli_fetch_array($result)){
		
    	echo 
		'<table width="35%" height="100%" border = "0" align="right">'. 
			'<tr>'.
				'<td width="30%" height="180px">'.
					'<img src="images/devices/'.$row['image_front'].'" width="70%" height="75%">'.
				'</td>'.
	
				'<td>'.
					'<a class="db_link" align="center" style="font-size:18px" 																																					            		href="AllDevicesCategories.html?tag=modem&id='.$row['id'].'">'.$row['nome'].'</a>'.
				'</td>'.
			'</tr>'.
		'</table>'
		;
		}
		
		echo '<div class="prev_next_links">
                    
                    <div class="device_link_prev">
                         <a href="DevicesByCategory.html?cat=tablet"> <h3>TABLET & <br/>COMPUTER</h3> </a>
                    </div>
                    
                    <div class="device_link_next">
                       <a href="DevicesByCategory.html?cat=tv"><h3>TV & SMART LIVING</h3></a>
                    </div>
                
                </div>';
		
		mysqli_close($db);
        
        break;
        
        //----------------------TV---------------------//
        
    case "tv":
         $query = "SELECT * FROM tv_smartliving";
  		 mysqli_query($db, $query) or die('Error querying database.');   
    	 $result = mysqli_query($db, $query);
		
		echo '<h1>TV e SMARTLIVING<h1>';
		
		while ($row = mysqli_fetch_array($result)){
		
    	echo 
		'<table width="35%" height="100%" border = "0" align="right">'. 
			'<tr>'.
				'<td width="30%" height="180px">'.
					'<img src="images/devices/'.$row['image_front'].'" width="70%" height="75%">'.
				'</td>'.
	
				'<td>'.
					'<a class="db_link" align="center" style="font-size:18px" 																																					            		href="AllDevicesCategories.html?tag=tv_smartliving&id='.$row['id'].'">'.$row['nome'].'</a>'.
				'</td>'.
			'</tr>'.
		'</table>'
		;
		}
		
		echo '<div class="prev_next_links">
                    
                    <div class="device_link_prev">
                         <a href="DevicesByCategory.html?cat=modem"><h3>MODEM & <br/> NETWORKING</h3></a>
                    </div>
                    
                    <div class="device_link_next">
                        <a href="DevicesByCategory.html?cat=discount"> <h3>DISCOUNT</h3></a>
                    </div>
                
                </div>';
		
		mysqli_close($db);
        
        break;
        
        //----------------------DISCOUNT---------------------//
        
    case "discount":
         $query = "SELECT * FROM discount";
  		 mysqli_query($db, $query) or die('Error querying database.');   
    	 $result = mysqli_query($db, $query);
		
		echo '<h1>DISCOUNT<h1>';
		
		while ($row = mysqli_fetch_array($result)){
		
    	echo 
		'<table width="35%" height="100%" border = "0" align="right">'. 
			'<tr>'.
				'<td width="30%" height="180px">'.
					'<img src="images/devices/'.$row['image_front'].'" width="70%" height="75%">'.
				'</td>'.
	
				'<td>'.
					'<a class="db_link" align="center" style="font-size:18px" 																																					            		href="AllDevicesCategories.html?tag=discount&id='.$row['id'].'">'.$row['nome'].'</a>'.
				'</td>'.
			'</tr>'.
		'</table>'
		;
		}
		
		echo '<div class="prev_next_links">
                    
                    <div class="device_link_prev">
                         <a href="DevicesByCategory.html?cat=tv"><h3>TV & SMART LIVING</h3></a>
                    </div>
                    
                    <div class="device_link_next">
                       
                    </div>
                
                </div>';
		
		mysqli_close($db);
        
        break;
        
        //----------------------PROMO---------------------//
        
    case "promo":
        echo "PROMO";
        
        break;
               
}


?>


<?php
    //Step2
    //$query = "SELECT * FROM smartphone ";
    //mysqli_query($db, $query) or die('Error querying database.');   
    //$result = mysqli_query($db, $query);
    //$row = mysqli_fetch_array($result);

    //while ($row = mysqli_fetch_array($result)) {
    //echo 
	//'<div>' . $row['id'] . '<br>' . $row['nome'] . '<br>' . $row['prezzo'] . '<br>' . $row['descrizione']. '<br>' . $row[		    'colore']. '<br>' . $row['specifiche'] . '</div>' ;
    //}
	
	//mysqli_close($db);
 ?>