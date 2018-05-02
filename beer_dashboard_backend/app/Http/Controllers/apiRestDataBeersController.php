<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class apiRestDataBeersController extends Controller
{

    public function data_alcohol(){
       	$mysql_hostname = "localhost";
		$mysql_user = "root";
		$mysql_password = "root";
		$mysql_database = "beers_database";
		$result = array();
		// Create connection
		$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");
		$sql = "SELECT alcohol, amargor, nombre, estilo, tamanio_onzas FROM `beers_table` ORDER BY beers_table.alcohol DESC LIMIT 10;";
		$resultado= mysqli_query($bd,$sql);
		if (mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)) {
               $result[] = $row;
            }
         } else {
            echo "0 results";
         }
         $decode = json_encode($result);
         return $decode;
    }

    public function data_max_alcohol(){
       	$mysql_hostname = "localhost";
		$mysql_user = "root";
		$mysql_password = "root";
		$mysql_database = "beers_database";
		$result = array();
		// Create connection
		$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");
		$sql = "SELECT alcohol, nombre, estilo FROM `beers_table` ORDER BY beers_table.alcohol DESC LIMIT 1;";
		$resultado= mysqli_query($bd,$sql);
		if (mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)) {
               $result[] = $row;
            }
         } else {
            echo "0 results";
         }
         $decode = json_encode($result);
         return $decode;
    }

    public function data_max_amargor(){
       	$mysql_hostname = "localhost";
		$mysql_user = "root";
		$mysql_password = "root";
		$mysql_database = "beers_database";
		$result = array();
		// Create connection
		$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");
		$sql = "SELECT amargor, nombre, estilo FROM `beers_table` ORDER BY beers_table.amargor DESC LIMIT 1;";
		$resultado= mysqli_query($bd,$sql);
		if (mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)) {
               $result[] = $row;
            }
         } else {
            echo "0 results";
         }
         $decode = json_encode($result);
         return $decode;
    }
}
