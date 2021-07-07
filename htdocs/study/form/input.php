<?php 
if(!empty($_POST)){
var_dump($_POST);
}
//スーパーグローバル変数 php ９種類 連想配列


//入力、確認、完了
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php if($pageFlag === 0): ?>
入力画面
<?php  endif; ?>
<?php if($pageFlag === 1): ?>
確認画面
<?php  endif; ?>
<?php if($pageFlag === 2): ?>
完了画面
<?php  endif; ?>


<form method="POST" action="input.php">
氏名
<input type="text" name="your_name">
<br>
<input type="checkbox" name="spoets[]"  value="野球">野球
<input type="checkbox" name="spoets[]"  value="サッカー">サッカー
<input type="checkbox" name="spoets[]"  value="バスケ">バスケ

<input type="submit" value="送信">


</form>
</body>
</html>