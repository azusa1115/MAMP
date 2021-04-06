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

$menbers = $db->query('SELECT * FROM name_list');

?>
<table border='3'>
  <tr>
    <td>No</td>
    <td>名前</td>
    <td>部署</td>
    <td>役職</td>
    <td>性別</td>
    <td>年齢</td>
  </tr>
  
  <?php foreach($menbers as $menber){ ?>
    <tr>
    <td><?php echo $menber['id']."\n"; ?></td>
    <td><?php echo $menber['name']."\n"; ?></td>
    <td><?php echo $menber['department']."\n"; ?></td>
    <td><?php echo $menber['position']."\n"; ?></td>
    <td><?php echo $menber['gender']."\n"; ?></td>
    <td><?php echo $menber['age']."\n"; ?></td>
    </tr>
  <?php
  }
  ?>
</table>




</body>
</html>