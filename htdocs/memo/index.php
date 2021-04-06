<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2>Practice</2>
<?php
require('dbconnect.php');

if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])){
  $page = $_REQUEST['page'];
}else{
  $page = 1;
}
$page = $_REQUEST['page'];
$start = 5 * ($page - 1);

$memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?,5');
$memos->bindParam(1,$start,PDO::PARAM_INT);
$memos->execute();
?>


<article>
    <?php while ($memo = $memos->fetch()):?>
    <p><a href="memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'],0,50)); ?></a></p>
    <time><?php print($memo['created_at']); ?></time>
    <hr>
    <?php endwhile; ?>

    <?php if ($page >= 2): ?>
    <a href="index.php?page=<?php print($page-1); ?>"><?php print($page-1) ?>ページ目へ</a>
    <?php endif; ?> 
    |
    <?php
    $counts = $db->query('SELECT COUNT(*) as cnt FROM memos');
    $count = $count->fetch();
    $max_page = ceil($count['cnt'] / 5);
    if ($page < $max_page ):
    ?>
    <a href="index.php?page=<?php print($page+1); ?>"><?php print($page+1) ?>ページ目へ</a>
  <?php endif; ?>
</article>
</body>
</html>