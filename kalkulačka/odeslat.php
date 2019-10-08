<?php
​
require_once "../config.php";
​
$data = $_POST["data"];
​
$spojeni = mysqli_connect(dbhost, dbuser, dbpass, dbname);
​
mysqli_query($spojeni, "INSERT INTO 3ep_sk2_ajax (data) VALUES ('$data')");
$pocet = mysqli_query($spojeni, "SELECT data FROM 3ep_sk2_ajax");

$pocet = $pocet + 1;

mysqli_close($spojeni);
​
