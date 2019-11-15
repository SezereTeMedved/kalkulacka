<?php
​
require_once "../config.php";
​
$data = $_POST["data"];
​
$spojeni = mysqli_connect(dbhost, dbuser, dbpass, dbname);
​
mysqli_query($spojeni, "INSERT INTO kalkulačka VALUES ('$data')");
$pocet = mysqli_query($spojeni, "SELECT data FROM kalkulačka);

$pocet = $pocet + 1;

mysqli_close($spojeni);
​
