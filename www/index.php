<?php

require __DIR__ . '/models/news.php';

$items = news_get_all(); // Получение массива с новостями из базы данных, используя БД

require __DIR__ . '/views/index.php';