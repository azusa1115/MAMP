<?php require('dbconnect.php'); ?>

<?php
$au_dbs = $db->prepare('INSERT INTO au_user SET plan=?,tel=?,family=?,internet=?,card=?');
$au_dbs->execute(array(
  $_POST['plan'],
  $_POST['tel'],
  $_POST['family'],
  $_POST['internet'],
  $_POST['card']
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
</body>
</html>