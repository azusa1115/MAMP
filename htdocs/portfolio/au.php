<?php require('dbconnect.php'); ?>


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
<script src="jquery-3.6.0.min.js"></script>


<h2 id="au">au</h2>
<h1>現在の料金プラン確認</h1>

<h2>ニックネーム</h2>
<input type="text" id="my_name" name="my_name" maxlength="255" value="">

<form action="check_au.php" method="post">
<h2>基本プラン</h2>
<?php $au_plan = $db->query('SELECT * FROM au1');?>
<select name='plan'>
<?php while($au_plans = $au_plan->fetch()){
?>
  <option value="<?php echo $au_plans['id'];?>"><?php echo $au_plans['plan'].$au_plans['price']; ?></option>
  <?php } ?>
</select>

<div id="radio1">
<h2>通話オプション</h2>
<input type="radio" name="tel" value="通話定額２" id="radio1Flag1"><label for="radio1Flag1">通話定額２</label>
<p>国内通話が２４時間かけ放題</p>
<input type="radio" name="tel" value="通話定額ライト２" id="radio1Flag2"><label for="radio1Flag2">通話定額ライト２</label>
<p>１回５分以内の国内通話が２４時間かけ放題</p>
<input type="radio" name="tel" value="なし" id="radio1Flag3"><label for="radio1Flag3">なし</label>
</div>

<div id="radio2">
<h2>家族割プラス</h2>
<input type="radio" name="family" value="１人" id="radio2Flag1"><label for="radio2Flag1">１人</label>
<input type="radio" name="family" value="２人" id="radio2Flag2">
<label for="radio2Flag2">２人</label>
<input type="radio" name="family" value="３人以上" id="radio2Flag3"><label for="radio2Flag3">３人以上</label>
</div>

<div id="radio3">
<h2>auスマートバリュー</h2>
<input type="radio" name="internet" value="あり" id="radio3Flag1"><label for="radio3Flag1">あり</label>
<input type="radio" name="internet" value="なし" id="radio3Flag2"><label for="radio3Flag2">なし</label>
</div>

<div id="radio4">
<h2>auPAYカード支払い割</h2>
<input type="radio" name="card" value="あり" id="radio4Flag1"><label for="radio1Flag1">あり</label>
<input type="radio" name="card" value="なし" id="radio4Flag2">
<label for="radio4Flag2">なし</label>
</div>


<input type="submit" value="送信">
</form>





</body>
</html>