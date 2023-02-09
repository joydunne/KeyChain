<?php
    echo "Hi <em>Brooke<em>, Why are you late???";
    echo "and you too Coen!!!<br>";
    print_r ($_GET) . "<br>";
    echo "Hello" . $_GET ["name"] . "<p>";

    foreach ($_GET as $id => $val){
        echo $id . "==>" . $val . "<br>";}

    echo '<button type = "button"> Input!</button>'
    $f = fopen ("test.json" , "a"); #w means if that file exist already it delets the old and puts the new one. a means it adds on to it 
    fwrite($f, "This is a file.\n");
    fwrite($f, json_encode($_GET) . "\n")
    fclose($f);
    echo "Saved";
?>