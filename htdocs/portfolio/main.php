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
<script src="jquery-3.6.0.min.js"></script>


<div id="main-top">
<h1>スマートフォン</h1>
<h1>料金プラン比較サイト</h1>
</div>
<div id="comment">
<p>今の携帯の通信料が高いとお悩みではないですか？？</p>
<p>今話題になって新しい携帯会社について知りたくないですか？</p>
<p>３分もあれば、通信料の比較ができご自身にあったプランを選ぶことができます！</p>
<h2>まずは現状のプランを確認しましょう！</h2>
</div>


  <button type="button" onclick="location.href='menber.php'" id="login">新規登録</button>

  <button type="button" onclick="location.href='login.php'" id="login">ログイン</button>




<!-- <p id="select">現在ご利用中のキャリアを選んでください</p>
<div id="c3">
<a href="docomo.php" id="docomo">docomo</a>
<a href="au.php" id="au">au</a>
<a href="sb.php" id="sb">softbank</a>
<div> -->


<script>

  $("#docomo").hover(function(){
    $(this).css("opacity","0.5");
  },function(){
    $(this).css("opacity","");
  });

  $("#au").hover(function(){
    $(this).css("opacity","0.5");
  },function(){
    $(this).css("opacity","");
  });

  $("#sb").hover(function(){
    $(this).css("opacity","0.5");
  },function(){
    $(this).css("opacity","");
  });

</script>
</body>
</html>