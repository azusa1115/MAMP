<?php require('dbconnect.php'); ?>

<?php
$au_planIds = $db->prepare('SELECT * FROM au1 WHERE id=?');
$au_planIds->execute(array($_POST['plan']));
$au_plansId = $au_planIds->fetch();
?>

<?php
$total_price = 0;

$tel_Flag = 0;
$tel_price = 0;
if( $_POST['tel'] == '通話定額２'){
  $total_price += 1980;
  $tel_price = '１９８０円';
  $tel_Flag = 0;
}else if( $_POST['tel'] == '通話定額ライト２'){
  $total_price += 880;
  $tel_price = '８８０円';
  $tel_Flag = 1;
}else if( $_POST['tel'] == 'なし'){
  $tel_price = '０円';
  $tel_Flag = 2;
}

$family_price = 0;
$family_Flag = 0;
if( $_POST['family'] == '１人'){
  $family_price = '０円';
  $family_Flag = 0;
}else if( $_POST['family'] == '２人'){
  $total_price -= 550;
  $family_price = '−５５０円';
  $family_Flag = 1;
}else if( $_POST['family'] == '３人以上'){
  $total_price -= 1100;
  $family_price = '−１１００円';
  $family_Flag = 2;
}

$internet_price = 0;
$internet_Flag = 0;
if( $_POST['internet'] == 'あり'){
  if( $au_plansId['id'] == 1 || 
      $au_plansId['id'] == 2 || 
      $au_plansId['id'] == 3 || 
      $au_plansId['id'] == 4){
    $total_price -= 1000;
    $internet_price = '−１０００円';
    $internet_Flag = 0;
  }else if( 
      $au_plansId['id'] == 6 ||
      $au_plansId['id'] == 7 ||
      $au_plansId['id'] == 9 || 
      $au_plansId['id'] == 10){
    $total_price -= 550;
    $au_plansId = '−５５０円';
    $internet_Flag = 1;
  }
}else if( $_POST['internet'] == 'なし'){
  $internet_price = '０円';
  $internet_Flag = 2;
}

$card_price = 0;
$card_Flag = 0;
if( $_POST['card'] == 'あり'){
  $total_price -= 110;
  $card_price = '−１１０円';
  $card_Flag = 0;
}else if( $_POST['cared'] == 'なし'){
  $card_price = '０円';
  $card_Flag = 1;
}
?>



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
<form action="register_au.php" method="post">
  <table>
    <tr>
      <td>基本プラン</td>
      <td><?php echo $au_plansId['plan']; ?></td>
      <td><?php echo $au_plansId['price'].'円'; ?></td>
      <input type="hidden" value="<?php echo $au_plansId['plan'] ?>" name="plan">
    </tr>
    <tr>
      <td>通話オプション</td>
      <td><?php echo $_POST['tel']; ?></td>
      <td><?php echo $tel_price; ?></td>
      <input type="hidden" value="<?php echo $tel_Flag ?>" name="tel">
    </tr>
    <tr>
      <td>家族割プラス</td>
      <td><?php echo $_POST['family']; ?></td>
      <td><?php echo $family_price; ?></td>
      <input type="hidden" value="<?php echo $family_Flag ?>" name="family">
    </tr>
    <tr>
      <td>auスマートバリュー</td>
      <td><?php echo $_POST['internet']; ?></td>
      <td><?php echo $internet_price; ?></td>
      <input type="hidden" value="<?php echo $internet_Flag ?>" name="internet">
    </tr>
    <tr>
      <td>auPAYスマートバリュー</td>
      <td><?php echo $_POST['card']; ?></td>
      <td><?php echo $card_price; ?></td>
      <input type="hidden" value="<?php echo $card_Flag ?>" name="card">
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
  <input type="submit" value="送信">
</form>

  
</body>