<?php

require __DIR__.'/../models/news.php';

if (isset($_GET)) {
    $id = $_GET[newsid];
}
$item = news_get_current($id); // ��������� ������� � ���������� ��������

require __DIR__.'/../views/news.php';