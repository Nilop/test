<?php

require __DIR__.'/../functions/sql.php';

/* ��������� ��������������  �� ���� � �������� ������� ������� ������� �� �� */
function news_get_all()
{
    $sql = 'SELECT * FROM news ORDER BY data DESC';
    return sql_query($sql);
}

/* ��������� ������� � ���������� �������� �� �� �� � ID */
function news_get_current($id)
{
    $sql = 'SELECT  *  FROM news WHERE id='. $id;
    $res = sql_query($sql);
    $res = $res[0];
    return $res;
}