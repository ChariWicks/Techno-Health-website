
	 <!...php code for connect to database..>
      <?php
	include 'config.php';

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM review ");
      ?>
		<!...php code to print Comments...>
        <?php
		echo ("All comments");
		 echo nl2br("\n");
		 echo nl2br("\n");
		 
          while( $row = mysql_fetch_assoc( $result ) ){
		  
         echo "<table>" ;
		 echo "<tr>" ;
		 echo "<td>" ; echo 'Name:'; 
		
		       echo "<td>" . $row['FirstName'] . "</td>"; 
			    echo "</td>" ;
				echo "</tr>" ;
				echo "<tr>" ;
				 echo "<td>" ; echo 'LastName:'; 
		
		       echo "<td>" . $row['LastName'] . "</td>"; 
 
				echo "</tr>" ;
					echo "<tr>" ;
				 echo "<td>" ; echo 'Comments:'; 
		
		       echo "<td>" . $row['Comments'] . "</td>"; 
			    echo "</td>" ;
				echo "</tr>" ;
				echo "</td>"; echo "</tr>" ; 
				
 echo "</table>";

		 echo nl2br("\n");

          }
        ?>

