<?php

require '/functions/sql.php';

function news_get_all()
{
    $sql = 'SELECT * FROM news ORDER BY data DESC';
    return sql_query($sql);
}
