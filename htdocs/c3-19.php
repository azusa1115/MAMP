<form action="submit.php" method="post">
<p>ご予約希望日（複数選択）</p>
  <input type="checkbox" name="reserve[]" value="1/3"> 1月 1日<br>
  <input type="checkbox" name="reserve[]" value="1/2"> 1月 2日<br>
  <input type="checkbox" name="reserve[]" value="1/3"> 1月 3日<br>
</p>
 <input type="submit" value="送信する">
</form>

ご予約日：
<?php
foreach($_POST)['reserve'] as $reserve) {
  print(htmlspecialchars($reserve ,ENT_QUOTES).' ');
}
?>