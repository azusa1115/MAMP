<!DOCTYPE html>

<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題</title>
</head>
<body>
<?php
try{
  $db = new PDO('mysql:dbname=kadai;host=localhost;charset=utf8','root','root');
}catch(PDOException $e){
  echo 'DB接続エラー:'.$e->getmessage();
}

$plofiles = $db->prepare('SELECT * FROM plofile WHERE id = ?');
$plofiles->execute(array($_GET['id']));
$plofile = $plofiles->fetch();

?>

趣味 <?php echo $plofile['hobby']; ?>

<tr>
    <td>名前</td><br>
    <td>役職</td><br>
    <td>趣味</td><br>
    <td>資格</td>
</tr><br>
<a href="name_list.php">戻る</a>
</body>
</html>