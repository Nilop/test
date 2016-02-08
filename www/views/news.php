<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $CurrentNews->title ?></title>
</head>
<body>
<?php $CurrentNews->PrintNews() ?>
<a href="../../">На главную</a>
<a href="../controller/newsedit.php?newsid=<?php echo $CurrentNews->id; ?>">Редактировать новость</a>
</body>
</html>