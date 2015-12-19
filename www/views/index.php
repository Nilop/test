<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Новости енотоляндии</title>
</head>
<body>
<h1>Новости нашего уголка</h1>
<ul>
    <?php foreach ($items as $link => $item): ?>
    <li>
        <h3><a href="/controller/news.php?newsid=<?php echo $link; ?>"><?php echo $item['title'] ?></a></h3>
        <p><?php echo $item['text'] ?></p>
    </li>
    <?php endforeach; ?>
</ul>
</body>
</html>