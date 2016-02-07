<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Добавление новости</title>
</head>
<body>
<h2>На этой странице вы можете отредактировать выбранную новость</h2>
<form action="/../controller/newsedit.php?newsid=<?php echo $id ?>" method="post">
    <label for="title">Введите новый заголовок новости:</label>
    <br>
    <input type="text" id="title" name="title" placeholder="<?php echo $item['title'] ?>" required>
    <br>
    <label for="content">Введите новый текст новости:</label>
    <br>
    <textarea cols="60" rows="10" id="content" name="text" placeholder="<?php echo $item['text'] ?>" required></textarea>
    <br>
    <input type="submit" value="Сохранить отредактированную новость">
</form>
<a href="../../">На главную</a>
</body>
</html>