<?php require('dbconnect.php'); ?>

<?php
$plans_4g = $db->prepare('SELECT * FROM docomo1 WHERE id=?');
$plans_4g->execute(array($_POST['docomo1']));
$plan4g = $plans_4g->fetch();

$plans_5g = $db->prepare('SELECT * FROM docomo2 WHERE id=?');
$plans_5g->execute(array($_POST['docomo2']));
$plan5g = $plans_5g->fetch();




$NowLine = $_POST['5g4g'];
$twoYears = $_POST['twoYears'];
$NowLineFlag = 0;


$total_price = 0;


$internet_pay = 0;
$internet_price = 0;
$internet_payFlag = 0;

if ($NowLine == '4g'){
  if($_POST['docomo1'] == 1 ){
    $internet_pay = 0;
    $internet_price = '０円';
    $internet_payFlag = 0;
  }else if($_POST['docomo1'] == 2){
    $internet_pay = 500;
    $internet_price = 'ー５００円';
    $internet_payFlag = 1;
  }else{
    $internet_pay = 1000;
    $internet_price = '−１０００円';
    $internet_payFlag = 2;
  }
}else if($NowLine == '5g'){
  if($_POST['docomo2'] == 1 ){
    $internet_pay = 0;
    $internet_price = '０円';
    $internet_payFlag = 0;
  }else if($_POST['docomo2'] == 2){
    $internet_pay = 500;
    $internet_price = '−５００円';
    $internet_payFlag = 1;
  }else{
    $internet_pay = 1000;
    $internet_price = '−１０００円';
    $internet_payFlag = 2;
  }
}


if ($NowLine == '5g'){
  $NowLineFlag = 0;
  $total_price = $plan5g['price'];
}else if($NowLine == '4g'){
  $NowLineFlag = 1;
  $total_price = $plan4g['price'];
}

$plan_pay = 0;
if($_POST['docomo1'])

$tel_pay = 0;
$tel_payFlag = 0;

if ($_POST['tel'] === 'かけ放題オプション'){
  $total_price += 1870;
  $tel_pay = '１８７０円';
  $tel_payFlag = 0;
}else if($_POST['tel'] === '５分通話無料オプション'){
  $total_price += 770;
  $tel_pay = '７７０円';
  $tel_payFlag = 1;
}else{
  $tel_pay = '０円';
  $tel_payFlag = 2;
}

$family_pay = 0;
$family_payFlag = 0;

if ($_POST['family'] === 'ファミリー割引２回線'){
  $total_price -= 550;
  $family_pay = '−５５０円';
  $family_payFlag = 0;
}else if($_POST['family'] === 'ファミリー割引３回線以上'){
  $total_price -= 1100;
  $family_pay = '−１１００円';
  $family_payFlag = 1;
}else{
  $family_pay = '０円';
  $family_payFlag = 2;
}

$dCard_pay = 0;
$dCard_payFlag = 0;

if ($_POST['dCard'] === 'あり') {
  $total_price -= 187;
  $dCard_pay = '−１８７円';
  $dCard_payFlag = 0;
}else{
  $dCard_pay = '０円';
  $dCard_payFlag = 1;
}

$two_years_pay = 0;
$two_years_payFlag = 0;

if ($_POST['twoYears'] === 'あり') {
  $total_price -= 187;
  $two_years_pay = '−１８７円';
  $two_years_payFlag = 0;
}else{
  $two_years_pay = '０円';
  $two_years_payFlag = 1;
}

$total_price -= $internet_pay;

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
<form action="register.php" method="post">
<?php print(htmlspecialchars($_POST['my_name'],ENT_QUOTES)); ?>さんの現在のプラン
<table>
  <input type="hidden" name='4g5g' value="<?php echo $NowLineFlag; ?>">
  <tr>
    <td>基本プラン</td>
    <?php if ( $NowLine == "4g"){ ?>
      <td><?php echo $plan4g['plan']; ?></td>
      <input type="hidden" name="plan" value="<?php echo $plan4g['plan']; ?>">
      <td><span><?php echo $plan4g['price'].'円'; ?></span></td>
    </tr>
    <?php }else if( $NowLine = "5g"){ ?>
      <td><?php echo $plan5g['plan']; ?></td>
      <input type="hidden" name="plan" value="<?php echo $plan5g['plan']; ?>">
      <td><span><?php echo $plan5g['price'].'円'; ?></span></td>
    </tr>
    <?php } ?>

   
  <tr>
    <td>音声オプション</td>
    <td><?php print(htmlspecialchars($_POST['tel'],ENT_QUOTES)); ?></td>
    <td><span><?php echo $tel_pay;?></span></td>
    <input type="hidden" name="tel" value="<?php echo $tel_payFlag; ?>">
  </tr>
  <tr>
    <td>みんなドコモ割</td>
    <td><?php print(htmlspecialchars($_POST['family'],ENT_QUOTES)); ?></td>
    <td><span><?php echo $family_pay;?></span></td>
    <input type="hidden" name="family" value="<?php echo $family_payFlag; ?>">
  </tr>
  <tr>
    <td>ドコモ光セット割</td>
    <td><?php echo $_POST['internet']; ?></td>
    <td><span><?php echo $internet_price; ?></span></td>
  </tr>
 
    <?php
    if( $NowLine == "4g" && $twoYears == "あり" ){

    }else{ ?>
    <tr>
    <td>dカード支払い</td>
    <td><?php print(htmlspecialchars($_POST['dCard'],ENT_QUOTES)); ?></td>
    <td><span><?php echo $dCard_pay;?></span></td>
    <input type="hidden" name="dcard" value="<?php echo $dCard_payFlag; ?>">
    </tr>
    <?php } ?>

  <?php
  if ( $NowLine == "5g" ){

  }else{ ?>
  <tr id="two_years">
    <td>２年定期契約</td>
    <td><?php print(htmlspecialchars($_POST['twoYears'],ENT_QUOTES)); ?></td>
    <td><span><?php echo $two_years_pay;?></span></td>
    <input type="hidden" name="two_years" value="<?php echo $two_years_payFlag; ?>">
  </tr>
  <?php } ?>
</table>

<div id="total">合計金額 <?php echo $total_price; ?> 円<br>


<input type="submit" value="送信">
</form>
</body>
</html>