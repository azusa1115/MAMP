<h2>Practive</h2>
<pre>
  <?php
    require('dbconnect.php');
    
    $statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');
    $statement->execute(array($_POST['memo'],$_POST['id']));
?>
</pre>
<p>メモの内容を変更しました</p>
<p><a href="index.php">戻る</a></p>