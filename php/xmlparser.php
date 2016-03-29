<?php
   echo "Diese Ausgabe geht über <br>
	 mehrereZeilen. Die Zeilenumbrüche werden <br>
	 ebenfalls ausgegeben.<br>";

   echo "tachauch<br>";
    $mysongs = simplexml_load_file('test.xml');
    echo $mysongs->song[0]->artist . "<br>";
    echo $mysongs->song[1]['dateplayed'] . "<br>";

echo mt_rand(0,15) . "<br>";
echo mt_rand(0,15) . "<br>";

echo mt_rand(5, 15);
?>
