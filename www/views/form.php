<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Добавление новости</title>
</head>
<body>
<h2>На этой странице вы можете ввести данные для добавления новости</h2>
<form action="/../controller/form.php" method="post">
    <label for="title">Введите заголовок новости:</label>
    <br>
    <input type="text" id="title" name="title" required>
    <br>
    <label for="content">Введите текст новости:</label>
    <br>
    <textarea cols="60" rows="10" id="content" name="text" required></textarea>
    <br>
    <input type="submit" value="Добавить новость">
</form>
<a href="../../">На главную</a>
</body>
</html>