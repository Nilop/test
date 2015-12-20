<?php

require __DIR__.'/../functions/sql.php';

/* Получение сортированного  по дате в обратном порядке массива новосте из БД */
function news_get_all()
{
    $sql = 'SELECT * FROM news ORDER BY data DESC';
    return sql_query($sql);
}

/* Получение массива с конкретной новостью из БД по её ID */
function news_get_current($id)
{
    $sql = 'SELECT  *  FROM news WHERE id='. $id;
    $res = sql_query($sql);
    $res = $res[0];
    return $res;
}