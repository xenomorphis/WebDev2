<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Artist;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function dbac() {
			require_once ('konfiguration.php');


			$db_link = mysqli_connect (
                     MYSQL_HOST, 
                     MYSQL_BENUTZER, 
                     MYSQL_KENNWORT, 
                     MYSQL_DATENBANK
                    );

			function query_json(string $query){
  		  		/* query from db */
  		   	$result = mysqli_query( $db_link, $query );
 
	   	   /* pealing the array data from db object */        
   			while ($row = mysqli_fetch_array($result)) {
 
     		 	  $data[] = $row;
     			}
 
		     /* checking if data has no rows */
     		  if(isset($data)){

           $json = json_encode($data);
     		  }else{
        		 /*    set nothing to return */
        	  $json = null;
     		  }
 
     		  return $json;
			  }     
    }
    
    public function search() {
			/* irgendein Suchzeugs */    
    }
    
    public function shop() {
          $artists = DB::table('artists')->select(['name', 'genre'])->take(3)->get();
		  return view ("shop", compact('artists'));
    }
}