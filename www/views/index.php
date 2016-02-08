<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Новости енотоляндии</title>
</head>
<body>
<h1>Новости нашего уголка</h1>
<ul>
    <?php for ($i=1; $i<=$NewsNumber; $i++): ?>
    <li>
        <?php
            $NameNews = 'NewsNumber' . $i;
            $$NameNews->PrintNewsTitleLink();
        ?>
    </li>
    <?php endfor; ?>
</ul>
<a href="/controller/form.php">Добавить новость</a>
</body>
</html>