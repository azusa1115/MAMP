<?php
if($_POST['menber_name'] === ''){
  $error['menber_name'] = 'blank';
}
if($_POST['mail'] === ''){
  $error['mail'] = 'blank';
}

(empty($error)('Location: menber_check.php');
exit();
?>

<?php require('dbconnect.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プラン比較サイト</title>
<link rel="stylesheet" href="menber.css">
</head>
<body>
  <h1>新規会員登録（入力画面）</h1>
  <form action="" method="post">
  <table>
    <tr>
      <td>ニックネーム
      <?php if($error['menber_name'] === 'blank'): ?>
        <p class="error">＊ニックネームを入力してください</p>
      <?php endif; ?>
      </td>
      <td><input type="text" name="menber_name" value="">
    </td>
    </tr>
    <tr>
      <td>メールアドレス
      <?php if($error['mail'] === 'blank'): ?>
        <p class="error">＊メールアドレスを入力してください</p>
      <?php endif; ?>
      </td>
      <td><input type="email" name="mail" value=""></td>
    </tr>
  </table>
  <input type="submit" value="送信">

  </form>

  <?php if(filter_var($email,FILTER_VALIDATE_EMAIL))
  ?>
</body>
