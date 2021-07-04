<?php require('dbconnect.php'); ?>
<?php
  if(!empty($_POST)){
  $menbers = $db->prepare('INSERT account SET ,mail=?,menber_name=?');
  $menbers->execute(array($_POST['mail']));

  header('Location: compilation.php');
  exit();
  }
  ?>
<?php
session_start();

if(!isset($_SESSION['join'])){
  header('Lcation: menber.php');
  exit();
}



?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プラン比較サイト</title>
<link rel="stylesheet" href="menber_check.css">
</head>
<body>
<h1>新規会員登録（確認画面）</h1>
  <form method="post">
  <table>
    <tr>
      <td>ニックネーム</td>
      <td><?php echo (htmlspecialchars($_SESSION['join']['menber_name'])); ?></td>
      <input type="hidden" name="menber_name">
    </tr>
    <tr>
      <td>メールアドレス</td>
      <td><?php echo (htmlspecialchars($_SESSION['join']['mail'])); ?></td>
    </tr>
    <input type="hidden" name="mail">
  </table>
  <button type="button" name="menber" value="return" onclick="history.back()">戻る</button>
  <input type="submit" name="menber" value="send">送信</button>
  </form>

</body>