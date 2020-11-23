<?php

$host = "localhost"; /* Host name */
$user = "anchorbn_anchorbn"; /* User */
$password = "29x.5KLdRC#kv4"; /* Password */
$dbname = "anchorbn_anchorborrowers"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}