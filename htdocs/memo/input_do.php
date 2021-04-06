<h2>Practive</h2>
<pre>
  <?php
    require('dbconnect.php');
    $statement = $db ->prepare('INSERT INTO memos SET memo=?,created_at=NOW()');
    $statement->execute(array($_POST['memo']));
    echo 'メッセージが登録されました';
?>
</pre>
