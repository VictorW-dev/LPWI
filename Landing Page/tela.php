<?php

$vname = "";
$vemail = "";

if (isset( $_POST["name"])){
    $vname= $_POST["name"];
}

if (isset($_POST["email"])){
    $vemail = $_POST["email"];
}    

echo "Name: ".$vname."<br/>";
echo "E-mail: ".$vemail."<br/>";

?>
