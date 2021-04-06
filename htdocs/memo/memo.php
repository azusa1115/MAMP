<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2>Practice</2>
<?php
require('dbconnect.php');

$id = $_REQUEST['id'];
if (!is_numeric($id) || $id <= 0){
  print('1以上の数字で指定して下さい');
  exit();
}


$memos = $db->prepare('SELECT * FROM memos WHERE id=?');
$memos->execute(array($id));
$memo = $memos->fetch();

?>

<article>
  <per><?php print($memo['memo']); ?></per>
  
  <a href="index.php">戻る</a>
</article>
</body>
</html>