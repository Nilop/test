<?php

require '/models/news.php';

$items = news_get_all();

require '/views/index.php';