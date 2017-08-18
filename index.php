<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>sayopaul HNG TASK 1 </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

  
        
    </head>
    <body>
      
                  <?php
                  	
	              	ini_set("display_errors",On);    	
                  	require "config.php";
                  	//sql query to get all the hotels from the database
                  	$sql=" SELECT * FROM hotels ORDER BY h_id DESC";

                  	//prepares the sql query and since there are no placeholders, we execute the query
                  	
                  	$prepared = $db->prepare($sql);
                  	$prepared->execute();

                  	

                  	//formats the data presented, nicely in a table
                  	$output = "
							<center>
								<h1> Sample Hotel Data </h1>
                  				<table>
                  				
									<tr>
										<th> Hotel ID </th>
										<th> Hotel Name </th>
										<th> State </th>
										<th> Rating </th>

									</tr>			
		
                  				
								
                  				";

                  	while($results = $prepared->fetchObject()){

                  		$output .= "<tr>
										<td> $results->h_id </td>
										<td> $results->h_name </td>
										<td> $results->h_state </td>
										<td> $results->h_stars star(s) </td>

                  					</tr>
                  					";
                  	}

                  	$output.="	
									
                  				</table>

              				</center>";

                  	echo $output;
                  	
                  
                  ?>
                  
         
       
    </body>
</html>