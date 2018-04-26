<?php

// By Nicholas Impieri Aka Anonik

//GNU General Public License V3.0

header("location: http://google.com"); //Redirect to this Site or Page

$ora=date(r); // Show the Date when user goes to the page     // Mostra la data
$ip=$_SERVER['REMOTE_ADDR']; // Show the Ip        //Mostra l'Ip
$br=$_SERVER['HTTP_USER_AGENT']; // Show the Browser Engine   //Mostra le info sul browser
$re=$_SERVER['HTTP_REFERER'];
$po=$_SERVER['REMOTE_PORT']; // Show the Port    //Mostra la porta

$ff=fopen("testo.txt","a"); // .txt when the ip was saved  //File dove si salveranno gli Ip
fwrite($ff,"\n\n------------------------------------------------\n");
fwrite($ff,"Ip: " . $ip . "\n");
fwrite($ff,"Browser: " . $br . "\n");
fwrite($ff,"Referer: " . $re . "\n");
fwrite($ff,"Porta: " . $po . "\n");
fwrite($ff,"Data Di Accesso: " . $ora . "\n");
fwrite($ff,"\n\n------------------------------------------------");
fclose($ff);

/*English Trasnalte of the Output screen :
fwrite($ff,"\n\n------------------------------------------------\n");
fwrite($ff,"Ip: " . $ip . "\n");
fwrite($ff,"Browser: " . $br . "\n");
fwrite($ff,"Referer: " . $re . "\n");
fwrite($ff,"Port: " . $po . "\n");
fwrite($ff,"Log Date: " . $ora . "\n");
fwrite($ff,"\n\n------------------------------------------------");
fclose($ff);

Delete the italian version and put this*/

 ?>
