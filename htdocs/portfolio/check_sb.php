<?php require('dbconnect.php'); ?>

<?php
$softbanks = $db->prepare('SELECT * FROM softbank WHERE id=?');
$softbanks->execute(array($_POST['plan']));
$softbank = $softbanks->fetch();


$total_price = 0;
$plan_price = $softbank['price'];

$tel_price = 0;
if( $_POST['tel'] == '定額オプション＋'){
  $total_price += 1980;
  $tel_price = '１９８０円';
}else if( $_POST['tel'] =='準定額オプション＋'){
  $total_price += 880;
  $tel_price = '８８０円';
}else if( $_POST['tel'] === 'なし' ){
  $tel_price = '０円';
}

$family_price = 0;
if ( $softbank['plan'] == 1 || 2 ){
  if( $_POST['family'] == '２人'){
    $total_price -= 660;
    $family_price = 'ー６６０円';
  }else if( $_POST['family'] == '３人以上'){
    $total_price -= 1210;
    $family_price = 'ー１２１０円';
  }
}else{
    $family_price = '０円';
}


if( $_POST['internet'] == 'あり' ){
  $total_price -= 1000;
  $internet_price = '−１０００円';
}else if( $_POST['internet'] == 'なし' ){
  $internet_price = '０円';
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プラン比較サイト</title>
  <link rel="stylesheet" href="check.css">
</head>
<body>
<table>
  <tr>
    <td>基本プラン</td>
    <td><?php echo $softbank['plan'];?></td>
    <td><?php echo $plan_price.'円'; ?></td>
  </tr>
  <tr>
    <td>通話オプション</td>
    <td><?php echo $_POST['tel']; ?></td>
    <td><?php echo $tel_price; ?></td>
  </tr>
  <tr>
    <td>新みんな家族割</td>
    <td><?php echo $_POST['family']; ?></td>
    <td><?php echo $family_price; ?></td>
  </tr>
  <tr>
    <td>おうち割光セット</td>
    <td><?php echo $_POST['internet']; ?></td>
    <td><?php echo $internet_price; ?></td>
  </tr>
</table>
</body>