<?php

function twoRandoms ($len)
{
   $random1 = mt_rand(0,$len-1);
   $random2 = mt_rand(0,$len-1);

   if($random2 == $random1)
   {
      $random2 = $random2+1;
      if($random2 >= $len)
      {
         $random2 = 0;
      }
   }

   return array($random1,$random2);
}

$zitate = simplexml_load_file('../xml/zitate.xml');
$zitateLen = count($zitate);

list ($wert1, $wert2) = twoRandoms($zitateLen);

echo "wert1 = " . $wert1 . " <br>";
echo "wert2 = " . $wert2 . " <br>";

echo "zitate.xml hat: " . $zitateLen . "Elemente<br>"; 
echo "<b> Zitat1 </b><br>";
echo $zitate->zitat[$wert1]->text . "<br>";
echo $zitate->zitat[$wert1]->autor . "<br>";
echo "<b> Zitat2 </b><br>";
echo $zitate->zitat[$wert2]->text . "<br>";
echo $zitate->zitat[$wert2]->autor . "<br>";

echo mt_rand(0,15) . "<br>";
echo mt_rand(0,15) . "<br>";

echo mt_rand(5, 15);
?>
