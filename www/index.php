<?php

require __DIR__ . '/models/news.php';
require __DIR__ . '/Lib/News.php';

$items = $model->news_get_all(); // ????????? ??????? ? ????????? ?? ???? ??????, ????????? ??


$NewsNumber = 0;
foreach ($items as $item):
    $NewsNumber= $NewsNumber + 1;
    $NameNews = 'NewsNumber' . $NewsNumber;
    $$NameNews = new NewsArticle($item);
endforeach;




require __DIR__ . '/views/index.php';