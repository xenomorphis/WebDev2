<?php

namespace App\Http\Controllers;

require_once ('config.php');

class Search {
	
$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );

public function query_json($query){
    /* query from db */
    $result = mysqli_query( $db_link, $query );
 
    /* pealing the array data from db object */        
    while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
 
        $data[] = $row;
    }
 
    /*    checking if data has no rows */
    if(isset($data)){

        $json = json_encode($data);
    }else{
        /*    set nothing to return */
        $json = null;
    }
 
    return $json;
}

}
?>
