<?php
// $ieyasu = strtotime('1543/1/31');
// $dat = strtotime('+2day');

// $day = date('n/j(D)',$dat);
// print($day."\n");

// for($i=1; $i<=365; $i++){
//   $timestamp = strtotime('+' . $i . 'day');
//   $day = date('n/j(D)',$timestamp);
//   print($day."\n");
// }
$i = 1;
while ($i <= 365){
  $timestamp = strtotime('+'.$i.'day');
  $day = date('n/j(D)'.$timestamp);
  print($day."\n");
  $i++;
}

?>