<?php
/**
 * Created by PhpStorm.
 * User: Beper
 * Date: 15/09/2017
 * Time: 3:17 PM
 */

$server = "127.0.0.1";
$database = "bepsky";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password, $database);

# checks connection to database
# echo mysqli_ping($con) ? 'Connection successful.' : 'Connection failed';
?>