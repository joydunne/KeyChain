<?php
    // echo "Hi <em>Brooke<em>, Why are you late???";
    // echo "and you too Coen!!!<br>";
    // print_r ($_GET) . "<br>";
    // echo "Hello" . $_GET ["name"] . "<p>";
    // add information to my json file in my terminal, the a means "add" instead of completely replacing each time I hit submit
    $f = fopen("orders.json", "a");
    // writes the data to the json file
    fwrite($f, json_encode($_GET) . "\n");

fclose($f);
    echo json_encode($_GET);
    // foreach ($_GET as $id => $val){
    //     echo $id . "==>" . $val . "<br>";}

    // echo '<button type = "button"> Input!</button>'
    // $f = fopen ("test.json" , "a"); #w means if that file exist already it delets the old and puts the new one. a means it adds on to it 
    // fwrite($f, "This is a file.\n");
    // fwrite($f, json_encode($_GET) . "\n");
    // fclose($f);
    // echo "Saved";

       
?>