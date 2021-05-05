


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

<h1>現在の料金プラン確認</h1>

<form action="check.php" method="post">
<h2>ニックネーム</h2>
<input type="text" id="my_name" name="my_name" maxlength="255" value=""><br>


<h2>現在の回線</h2>
<p>5G<input type="radio" name="5g4g" id="5g" value="5g" ></p>
<p>4G<input type="radio" name="5g4g" id="4g" value="4g" ></p><br>





<script src="jquery-3.6.0.min.js"></script>
<script>

  $('input:radio[name="5g4g"]').change(function(){
    var idRadio = $('input[name="5g4g"]:checked').attr("id");
    
    if( idRadio === "4g"){
      $('#docomo1').show();
      $('#docomo2').hide();
      $('#contract').show()
      $('#dcard').hide();
    }else if( idRadio === "5g"){
      $('#docomo2').show();
      $('#docomo1').hide();
      $('#contract').hide();
      $('#dcard').show();
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

<h2>音声オプション</h2>
<p>かけ放題オプション<input type="radio" name="tel" value="かけ放題オプション" ></p>
<p>５分通話無料オプション<input type="radio" name="tel" value="５分通話無料オプション" ></p>
<p>加入なし<input type="radio" name="tel" value="加入なし" ></p>

<h2>みんなドコモ割</h2>
<p>ファミリー割引なし<input type="radio" name="family" value="ファミリー割引なし" ></p>
<p>ファミリー割引２回線<input type="radio" name="family" value="ファミリー割引２回線" ></p>
<p>ファミリー割引３回線以上
  <input type="radio" name="family" value="ファミリー割引３回線以上" ></p>

<h2>ドコモ光セット割</h2>
<p>あり<input type="radio" name="internet" value="あり" ></p>
<p>なし<input type="radio" name="internet" value="なし" ></p>


<div id="contract">
<h2>２年定期契約</h2>
<p>あり<input type="radio" name="twoYears"
value="あり" id="yes"></p>
<p>なし<input type="radio" name="twoYears" value="なし" id="no"></p>
</div>

<script>
  $('input:radio[name="twoYears"]').change(function(){
    var idRadio2 = $('input[name="twoYears"]:checked').attr("id");
  
  if (idRadio2 === "no"){
    $('#dcard').show();
  }else if(idRadio2 === "yes"){
    $('#dcard').hide();
  }
  });

</script>

<div id="dcard">
<h2 >dカード支払い設定</h2>
<p>あり<input type="radio" name="dCard"
value="あり"></p>
<p>なし<input type="radio" name="dCard" value="なし"></p>
</div>







<input type="submit" value="送信">
</body>
</html>