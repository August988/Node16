<?php
    // Made by simple #AddSearchBar with love
    // Print the script
    header("content-type: text/plain");
    ob_start();
    
    $SCR = file_get_contents("./gameserver.txt");
    if (!isset($_GET["po"]))
    {
        // We most likely want the default
        $S1 = str_replace("%pi", "-1", $SCR);
        $S2 = str_replace("%po", "53640", $S1);
        echo $S2;
    }
    else {
        $S1 = str_replace("%pi", "65033", $SCR); // Until I find the arg for placeid, it's gonna stay like this.
        $S2 = str_replace("%po", $_GET["port"], $S1);
        echo $S2;
    }
?>

<?php
    // Write the signature so the ROBLOX client actually works.
    $SIG;
    $DAT = "\r\n" . ob_get_clean();
    $PV = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/static/keys/ix86_+)j.pem");
    openssl_sign($DAT, $SIG, $PV, OPENSSL_ALGO_SHA1);
    
    echo "--rbxsig%" . base64_encode($SIG) . "%" . $DAT;
?>