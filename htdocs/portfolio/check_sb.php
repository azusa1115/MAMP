<?php require('dbconnect.php'); ?>

<?php
$softbanks = $db->prepare('SELECT * FROM softbank WHERE id=?');
$softbanks->execute(array($_POST['plan']));
$softbank = $softbanks->fetch();


$total_price = 0;
$plan_price = $softbank['price'];
$tel_flag = 0;

$tel_price = 0;
if( $_POST['tel'] == '定額オプション＋'){
  $total_price += 1980;
  $tel_price = '１９８０円';
  $tel_flag = 0;
}else if( $_POST['tel'] =='準定額オプション＋'){
  $total_price += 880;
  $tel_price = '８８０円';
  $tel_flag = 1;
}else if( $_POST['tel'] === 'なし' ){
  $tel_price = '０円';
  $tel_flag = 2;
}

$family_price = 0;
$family_flag = 0;

if ( $_POST['plan'] == 1 || $_POST['plan'] == 2 ){
  if( $_POST['family'] == '２人'){
    $total_price -= 660;
    $family_price = 'ー６６０円';
    $family_flag = 0;
  }else if( $_POST['family'] == '３人以上'){
    $total_price -= 1210;
    $family_price = 'ー１２１０円';
    $family_flag = 1;
  }
}else{
    $family_price = '０円';
    $family_flag = 2;
}

$internet_price = 0;
$internet_flag = 0;

if( $_POST['internet'] == 'あり' ){
  $total_price -= 1000;
  $internet_price = '−１０００円';
  $internet_flag = 0;
}else if( $_POST['internet'] == 'なし' ){
  $internet_price = '０円';
  $internet_flag = 1;
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

<form action="register_sb.php" method="post">
<table>
  <tr>
    <td>基本プラン</td>
    <td><?php echo $softbank['plan'];?></td>
    <td><?php echo $plan_price.'円'; ?></td>
    <input type="hidden" name="plan" value="<?php echo $softbank['plan'];?>">
  </tr>
  <tr>
    <td>通話オプション</td>
    <td><?php echo $_POST['tel']; ?></td>
    <td><?php echo $tel_price; ?></td>
    <input type="hidden" name="tel" value="<?php echo $tel_flag;?>">
  </tr>
  <tr>
    <td>新みんな家族割</td>
    <td><?php echo $_POST['family']; ?></td>
    <td><?php echo $family_price; ?></td>
    <input type="hidden" name="family" value="<?php echo $family_flag;?>">
  </tr>
  <tr>
    <td>おうち割光セット</td>
    <td><?php echo $_POST['internet']; ?></td>
    <td><?php echo $internet_price; ?></td>
    <input type="hidden" name="internet" value="<?php echo $internet_flag;?>">
  </tr>
</table>

<input type="submit" value="送信">
</form>
</body>