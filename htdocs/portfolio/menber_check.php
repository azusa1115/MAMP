<?php require('dbconnect.php'); ?>
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
      <td>メールアドレス</td>
      <td><?php echo $_POST['mail'] ?></td>
    </tr>
    <tr>
      <td>ニックネーム</td>
      <td><?php echo $_POST['menber_name'] ?></td>
    </tr>
  </table>
  <button type="submit" name="menber" value="return">戻る</button>
  <button type="submit" name="menber" value="send">送信</button>
  </form>
  <?php
  $menbers = $db->prepare('INSERT account SET ,mail=?,menber_name=?');
  $menbers->execute(array($_POST['mail']))
  ?>
</body>