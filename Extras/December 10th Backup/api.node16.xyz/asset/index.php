<?php
//coded by maddox
//this is to prevent source code leaks and maybe more idk.
header("content-type: text/plain");

$id = $_GET["id"];
//the main code
if (ctype_digit($id)) {
    $file_path = $_SERVER["DOCUMENT_ROOT"] . "/asset/" . $id;

    if (file_exists($file_path)) {
        $file = file_get_contents($file_path);
        echo $file;
    } else {
        //this is the success. If the ID contains numbers.
        header("Location: https://assetdelivery.roblox.com/v1/asset/?id=".$id."&version=1");
        die();
    }
} else {
//if the id contains words or special characters, itll be redirected here.
    header("Location: http://api.node16.xyz/asset/unsuccessfulasset.html");
    die();
}
?>