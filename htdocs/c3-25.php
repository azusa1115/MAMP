<?php
session_start();
$_SESSION['session_message'] = '値をセッションに保存しました';
?>
<!doctype html>

<per>
セッションに値を保存しました次のページに移動してみましょう。
&raquo; <a href="page2.php">Page2へ</a>
</per>