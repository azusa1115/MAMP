<?php $test = $db->query('SELECT * FROM docomo'); 
while($aaa = $test->fetch()){?>
  <input type="radio" name="bacic_plan" value="" >
<?php echo $aaa['plan'];
  echo ' ';
  echo $aaa['price'].'円';
  echo '<br>';
}
?>
<?php
if ( $_['my_name'] === '' ) {
  print('入力がありません');
}
?>

<?php
$entry = $db->prepare('INSERT INTO docomo_users SET line=?,plan=?,tel=?,family=?,internet=?,two_years=?,dcard=?,status=?');
//事前準備prepare
echo $entry->execute(array(
  $_POST['line'],
  $_POST['plan'],
  $_POST['tel'],
  $_POST['family'],
  $_POST['internet'],
  $_POST['two_years'],
  $_POST['dcard'],
  $_POST['status']
  ));
?>