<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プラン比較サイト</title>
<link rel="stylesheet" href="main.css">
</head>
<body>
<h1>料金プラン比較サイト</h1>

<div id="3c">
<a href="docomo.php?id=<?php echo $plan['id']; ?> ">docomo</a>
<a href="au.php">au</a>
<a href="sb.php">softbank</a>
<div>

</body>
</html>