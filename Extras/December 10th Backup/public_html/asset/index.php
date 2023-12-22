<?php
//coded by maddox
//this is to prevent source code leaks and maybe more idk.
// some features added by simple


    $id = $_GET["id"];
    if (file_exists($file_path))
    header("Content-Type: application/octet-stream");
    header("Content-Transfer-Encoding: Binary");
    
//the main code
if (ctype_digit($id)) {
    $file_path = $_SERVER["DOCUMENT_ROOT"] . "/asset/" . $id;

    if (file_exists($file_path)) {
        header("Content-disposition: attachment; filename=".$id); 
        die(file_get_contents($file_path));
    } elseif (file_exists($file_path . ".lua")) {
        header("Content-disposition: attachment; filename=".$id.".lua"); 
        die(file_get_contents($file_path . ".lua"));
    } else {
        //this is the success. If the ID contains numbers.
        die(header("Location: https://assetdelivery.roblox.com/v1/asset/?id=".$id."&version=1"));
    }
} else {
//if the id contains words or special characters, itll be redirected here.
    header("Location: http://api.node16.xyz/asset/unsuccessfulasset.html");
    die();
}
?>