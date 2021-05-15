<?php require('dbconnect.php'); ?>
<?php
$au_plan = $db->query('SELECT * FROM au1');
$au_plans = $au_plan->fetchAll();
echo $au_plans['plan'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プラン比較サイト</title>
<link rel="stylesheet" href="au.css">
</head>
<body>


<form action="" method="post">
<h1>現在の料金プラン確認</h1>

<h2>基本プラン</h2>
<h2>家族割プラス</h2>
<p>１人<input type="radio" name="family"></p>
<p>２人<input type="radio" name="family">
<p>３人以上<input type="radio" name="family"></p>
<h2>auスマートバリュー</h2>
</form>
</body>
</html>