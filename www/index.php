<?php

require __DIR__.'/models/news.php';

$items = news_get_all(); // ��������� ������� � ��������� �� ���� ������, ��������� ��

require '/views/index.php';