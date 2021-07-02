


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

<h2 id="docomo">docomo</h2>
<h1>現在の料金プラン確認</h1>

<form action="check.php" method="post">
<h2>ニックネーム</h2>
<input type="text" id="my_name" name="my_name" maxlength="255" value=""><br>


<div id="radio1">
<h2>現在の回線</h2>
<input type="radio" name="5g4g" value="5g" id="radio1Flag1"><label for="radio1Flag1">５Ｇ</label>
<input type="radio" name="5g4g" value="4g" id="radio1Flag2"><label for="radio1Flag2">４Ｇ</label>
</div>





<script src="jquery-3.6.0.min.js"></script>
<script>

  $('input:radio[name="5g4g"]').change(function(){
    var idRadio = $('input[name="5g4g"]:checked').attr("id");
    
    if( idRadio === "radio1Flag2"){
      $('#docomo1').show();
      $('#docomo2').hide();
      $('#radio5').show()
      $('#radio6').hide();
    }else if( idRadio === "radio1Flag1"){
      $('#docomo2').show();
      $('#docomo1').hide();
      $('#radio5').hide();
      $('#radio6').show();
    }
  });

</script>

<h2>基本プラン</h2>

<select name="docomo1" size="" id="docomo1">
<?php $test = $db->query('SELECT * FROM docomo1'); 
while($aaa = $test->fetch()){ ?>
  <option value="<?php echo $aaa['id']; ?>"><?php echo $aaa['plan'].$aaa['price'].'円'; ?></option>
<?php } ?>
</select>

<select name="docomo2" size="" id="docomo2">
<?php $test = $db->query('SELECT * FROM docomo2'); 
while($aaa = $test->fetch()){ ?>
  <option value="<?php echo $aaa['id']; ?>"><?php echo $aaa['plan'].$aaa['price'].'円'; ?></option>
<?php } ?>
</select>

<div id="radio2">
<h2>音声オプション</h2>
<input type="radio" name="tel" value="かけ放題オプション" id="radio2Flag1"><label for="radio2Flag1">かけ放題オプション</label>
<input type="radio" name="tel" value="５分通話無料オプション" id="radio2Flag2"><label for="radio2Flag2">５分通話無料オプション</label>
<input type="radio" name="tel" value="加入なし" id="radio2Flag3"><label for="radio2Flag3">加入なし</label>
</div>

<div id="radio3">
<h2>みんなドコモ割</h2>
<input type="radio" name="family" value="ファミリー割引なし" id="radio3Flag1"><label for="radio3Flag1">ファミリー割引なし</label>
<input type="radio" name="family" value="ファミリー割引２回線" id="radio3Flag2"><label for="radio3Flag2">ファミリー割引２回線</label>
<input type="radio" name="family" value="ファミリー割引３回線以上" id="radio3Flag3"><label for="radio3Flag3">ファミリー割引３回線以上</label>
</div>

<div id="radio4">
<h2>ドコモ光セット割</h2>
<input type="radio" name="internet" value="あり" id="radio4Flag1"><label for="radio4Flag1">あり</label>
<input type="radio" name="internet" value="なし" id="radio4Flag2" ><label for="radio4Flag2">なし</label>
</div>


<div id="radio5">
<h2>２年定期契約</h2>
<input type="radio" name="twoYears" value="あり" id="radio5Flag1"><label for="radio5Flag1">あり</label>
<input type="radio" name="twoYears" value="なし" id="radio5Flag2"><label for="radio5Flag2">なし</label>
</div>

<script>
  $('input:radio[name="twoYears"]').change(function(){
    var idRadio2 = $('input[name="twoYears"]:checked').attr("id");
  
  if (idRadio2 === "radio5Flag2"){
    $('#radio6').show();
  }else if(idRadio2 === "radio5Flag1"){
    $('#radio6').hide();
  }
  });

</script>

<div id="radio6">
<h2>dカード支払い設定</h2>
<input type="radio" name="dCard"
value="あり" id="radio6Flag1"><label for="radio6Flag1">あり</label>
<input type="radio" name="dCard" value="なし" id="radio6Flag2"><label for="radio6Flag2">なし</label>
</div>







<input type="submit" value="送信">
</body>
</html>

<!-- ネxtではなくなる
５行目で全部のラジオボタン
 -->

