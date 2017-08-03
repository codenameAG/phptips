<html> 
    <body> 
        <table border="0" width="100%"> 
            <tr> 
                <td> 
                    site id
                </td> 
                <td>vName</td>
                <td>Comment</td>
                <td>Area</td>
            </tr> 
        <?php 
        $db = pg_connect('host=52.45.175.175 port=5432 dbname=ada_db_live user=sanmateo_usr password=sanmateo_pass'); 

        $query = "SELECT * FROM site_mas limit 5"; 

        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 
        //echo "<h1>got it </h1>"; 
        while($myrow = pg_fetch_assoc($result)) { 
          //  echo "<tr><td>" . $myrow['iSiteId'] . "</td></tr>";
            printf ("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $myrow['iSiteId'], htmlspecialchars($myrow['vName']), htmlspecialchars($myrow['vComment']), htmlspecialchars($myrow['Area'])); 
        } 
        ?> 
        </table> 
    </body> 
</html> 
