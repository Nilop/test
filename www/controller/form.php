<?php

require __DIR__.'/../models/news.php';

if (!empty($_POST))
{
    $data = [];
    if ((!empty($_POST['title'])) and (!empty($_POST['text'])))
    {
        $data['title'] = $_POST['title'];
        $data['text'] = $_POST['text'];
        $data['data'] = date('Y-m-d H:i:s');
    }
    if (isset($data['title']) && isset($data['text']) && isset($data['data'])) {
        $model->news_insert($data);
        header('Location: /index.php');
        die;
    }
}

require __DIR__.'/../views/form.php';