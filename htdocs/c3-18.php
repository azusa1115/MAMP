
<form action="submit.php" method="post">
 <p>性別：<input type="radio" name="gender" value="男性"> 男性 / <input type="radio" name="gender" value="女性">女性</p>
  <input type="submit" value="送信する">
</form>

性別：<?php print(htmlspecialchars($_POST['gender'],ENT_QUOTES)); ?>