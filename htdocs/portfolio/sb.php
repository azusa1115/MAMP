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

<h2 id="sb">SoftBank</h2>
<h1>現在の料金プラン確認</h1>
<form action="check_sb.php" method="post">
<h2>ニックネーム</h2>
<input type="text" id="my_name" name="my_name" maxlength="255" value="">
<h2>基本プラン</h2>
<select name='plan'>
  <?php
  $sbs = $db->query('SELECT * FROM softbank');
  while( $sb = $sbs->fetch()){ ?>
  <option value="<?php echo $sb['id']; ?>"><?php echo $sb['plan'].$sb['price'].'円'; ?></option>
  <?php } ?>
</select>

<div id="radio">
<h2>通話オプション</h2>
<input type="radio" name="tel" value="定額オプション＋" id="radio1Flag1"><label for="radio1Flag1">定額オプション＋</label>
<p>２４時間いつでも国内通話がし放題</p>
<input type="radio" name="tel" value="準定額オプション＋" id="radio1Flag2"><label for="radio1Flag2">準定額オプション＋</label>
<p>１回５分以内の国内通話が何度でも</p>
<input type="radio" name="tel" value="なし" id="radio1Flag3"><label for="radio1Flag3">なし</label>
</div>

<div id="radio2">
<h2>新みんな家族割</h2>
<input type="radio" name="family" value="１人" id="radio2Flag1"><label for="radio2Flag1">１人</label>
<input type="radio" name="family" value="２人" id="radio2Flag2"><label for="radio2Flag2">２人</label>
<input type="radio" name="family" value="３人以上" id="radio2Flang3"><label for="radio2Flang3">３人以上</label>
</div>

<div id="radio3">
<h2>おうち割光セット</h2>
<input type="radio" name="internet" value="あり" id="radio3Flang1"><label for="radio3Flag1">あり</label>
<input type="radio" name="internet" value="なし" id="radio3Flag2"><label for="radio3Flag2">なし</label>
</div>

<input type="submit" value="送信">

</form>
</body>
</html>
