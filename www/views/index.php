<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Новости енотоляндии</title>
</head>
<body>
<h1>Новости нашего уголка</h1>
<ul>
    <?php foreach ($items as $item): // Ключ массива, он же идентификатор новости, используется как ссылка на конкретную новость ?>
    <li>
        <h3><a href="/controller/news.php?newsid=<?php echo $item['id']; ?>"><?php echo $item['title'] ?></a></h3>
    </li>
    <?php endforeach; ?>
</ul>
</body>
</html>