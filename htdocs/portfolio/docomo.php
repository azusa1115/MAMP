<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プラン比較サイト</title>
<link rel="stylesheet" href="docomo.css">
</head>
<body>
<?php
 $plans = $db->prepare('SELECT * FROM docomo WHERE id=?');
$plans->execute(array($GET['id']));
$plan =$plans->fetch();
?>

<h1>現在の料金プランを確認しましょう</h1>

<form action="check.php" method="get">
<label for="my_name">ニックネーム（本名ではなくて良いです）</label>
<input type="text" id="my_name" name="my_name" maxlength="255" value="">
<label for="my_name">基本プラン</label><br>
<input type="radio" name="bacic_plan" value=<?php >


<input type="submit" value="送信">
</body>
</html>