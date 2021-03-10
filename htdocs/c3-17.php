<!-- <form action="submit.php" method="get">
  <label for="my_name">お名前：</label>
  <input type="text" id="may_name" name="my_name" maxlenfth="255" value="">
  <input type="submit" value="送信する">
</form> -->

<form action="submit.php" method="get">
<dl>
<dt><label for="my_name">お名前</label>
</dt>
<dd>
<?php print(htmlspecialchars($_GET['my_name'].ENT_QUOTES)); ?>
<input id="my_name" type="text" name="my_name" size="35" maxlength="255" value="" />
</dd>
<dt><label for="message">メッセージ：</label></dt>
<dd>
<input id="message" type="text" name="message" size="35" maxlength="255" value="" />
</dd>
</dl>
<input type="submit" value="送信する" />
</form>