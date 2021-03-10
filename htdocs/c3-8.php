<?php
$old = ['10代以下','２０代','３０代','４０代','５０代','６０代以上'];

print('・'.$old[1]);

$boxs = [
  'win' => 'Windows',
  'mac' => 'Macintosh',
  'iphone' => 'iPhone',
  'android' => 'Android'
];

foreach ($boxs as $box => $english){
  print($box . $english);
}

?>