
<?php
$today = new DateTime();
print($today -> format('G時I分s秒').'です');
print((100+1050+200)*1.08);
$sum = 100+1050+200;
print($sum);
print($sum * 1.08);
$sm = 8 + 2;

?>

税込み金額は：<?php print($sum* 1.08); ?>円です<br>
<?php print($sm); ?>

