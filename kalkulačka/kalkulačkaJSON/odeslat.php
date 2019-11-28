<?php
require_once "../config.php";

$data = $_POST["data"];

$spojeni = mysqli_connect(dbhost, dbuser, dbpass, dbname);
$all = mysqli_query($spojeni, "SELECT * FROM kalkulačka");
$table = mysqli_fetch_assoc($all);


if($data == "1")
{
    $pocet = $table['1'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET `1` = '$pocet'");
}
elseif($data == "2")
{
    $pocet = $table['2'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET `2` = '$pocet'");
}
elseif($data == "3")
{
    $pocet = $table['3'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET `3` = '$pocet'");
}
elseif($data == "4")
{
    $pocet = $table['4'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET `4` = '$pocet'");
}
elseif($data == "5")
{
    $pocet = $table['5'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET `5` = '$pocet'");
}
elseif($data == "6")
{
    $pocet = $table['6'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET `6` = '$pocet'");
}
elseif($data == "7")
{
    $pocet = $table['7'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET `7` = '$pocet'");
}
elseif($data == "8")
{
    $pocet = $table['8'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET `8` = '$pocet'");
}
elseif($data == "9")
{
    $pocet = $table['9'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET `9` = '$pocet'");
}
elseif($data == "0")
{
    $pocet = $table['0'] + 1;
    mysqli_query($spojeni, "UPDATE kalkulačka SET `0` = '$pocet'");
}

$all = mysqli_query($spojeni, "SELECT * FROM kalkulačka");
$table = mysqli_fetch_assoc($all);

$json = '{"data":[';
    $json .= '"' . $table["0"] . '","' . $table["1"] . '","' . $table["2"] . '","' . $table["3"] . '","' . $table["4"] . '","' . $table["5"] . '","' . $table["6"] . '","' . $table["7"] . '","' . $table["8"] . '","' . $table["9"] . '"';
    $json .= ']}';
    
    echo $json;