<?php
    echo "Hi <em>Brooke<em>, Why are you late???";
    echo "and you too Coen!!!<br>";
    print_r ($_GET) . "<br>";
    echo "Hello" . $_GET ["name"] . "<p>";

    foreach ($_GET as $id => $val){
        echo $id . "==>" . $val . "<br>";}

    $f = fopen ("test.json" , "W");
    fwrite ($f, "This is a file.");
    fclose($f);
    echo "saved";
?>