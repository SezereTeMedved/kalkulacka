<?php
require_once "../config.php";

$data = $_POST["data"];

$spojeni = mysqli_connect(dbhost, dbuser, dbpass, dbname);
$all = mysqli_query($spojeni, "SELECT * FROM kalkulačka");
$table = mysqli_fetch_assoc($all);

if($data == "1")
{
    $pocet = $table['jedna'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET 'jedna' = '$pocet'");
}
elseif($data == "2")
{
    $pocet = $table['dva'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET 'dva' = '$pocet'");
}
elseif($data == "3")
{
    $pocet = $table['tri'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET 'tri' = '$pocet'");
}
elseif($data == "4")
{
    $pocet = $table['ctyri'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET 'ctyri' = '$pocet'");
}
elseif($data == "5")
{
    $pocet = $table['pet'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET 'pet' = '$pocet'");
}
elseif($data == "6")
{
    $pocet = $table['sest'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET 'sest' = '$pocet'");
}
elseif($data == "7")
{
    $pocet = $table['sedm'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET 'sedm' = '$pocet'");
}
elseif($data == "8")
{
    $pocet = $table['osm'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET 'osm' = '$pocet'");
}
elseif($data == "9")
{
    $pocet = $table['devet'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET 'devet' = '$pocet'");
}
elseif($data == "0")
{
    $pocet = $table['nula'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET 'nula' = '$pocet'");
}

$all = mysqli_query($spojeni, "SELECT * FROM kalkulačka");
$table = mysqli_fetch_assoc($all);

$json = '{"data":[';
    $json .= '"' . $table["nula"] . '","' . $table["jedna"] . '","' . $table["dva"] . '","' . $table["tri"] . '","' . $table["ctyri"] . '","' . $table["pet"] . '","' . $table["sest"] . '","' . $table["sedm"] . '","' . $table["osm"] . '","' . $table["devet"] . '"';
    $json .= ']}';
    
    echo $json; 