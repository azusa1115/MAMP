<?php require('dbconnect.php'); ?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プラン比較サイト</title>
<link rel="stylesheet" href="sb.css">
</head>
<body>
<h1>現在の料金プラン確認</h1>
<form action="check_sb.php" method="post">
<h2>ニックネーム</h2>
<input type="text" id="my_name" name="my_name" maxlength="255" value=""><br>
<h2>基本プラン</h2>
<select name='plan'>
  <?php
  $sbs = $db->query('SELECT * FROM softbank');
  while( $sb = $sbs->fetch()){ ?>
  <option  value="<?php echo $sb['id']; ?>"><?php echo $sb['plan'].$sb['price'].'円'; ?></option>
  <?php } ?>
</select>

<h2>通話オプション</h2>
<h3>定額オプション＋<input type="radio" name="tel" value="定額オプション＋"></h3>
<p>１回５分以内の国内通話が何度でも</pack>
<h3>準定額オプション＋<input type="radio" name="tel" value="準定額オプション＋"></h3>
<p>２４時間いつでも国内通話がし放題</p>
<h3>なし<input type="radio" name="tel" value="なし"></h3>

<h2>新みんな家族割</h2>
<h3>１人<input type="radio" name="family" value="１人"></h3>
<h3>２人<input type="radio" name="family" value="２人"></h3>
<h3>３人以上<input type="radio" name="family" value="３人以上"></h3>

<h2>おうち割光セット</h2>
<h3>あり<input type="radio" name="internet" value="あり"></h3>
<h3>なし<input type="radio" name="internet" value="なし"></h3>

<input type="submit" value="送信">

</form>
</body>
</html>