<?php

require __DIR__.'/../models/news.php';
require __DIR__.'/../Lib/News.php';

if (isset($_GET)) {
    $id = $_GET[newsid];
}
$item = $model->news_get_current($id); // ��������� ������� � ���������� ��������

$CurrentNews = new NewsArticle($item);

require __DIR__.'/../views/news.php';