<?php require('dbconnect.php'); ?>
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
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プラン比較サイト</title>
<link rel="stylesheet" href="">
</head>
<body>

<?php echo $_POST['plan'];
      echo $_POST['tel'];
      echo $_POST['family'];
      echo $_POST['dcard'];
      echo $_POST['2yeard'];
?>

</body>
</html>