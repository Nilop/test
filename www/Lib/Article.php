<?php

/**
    Это описание абстактного класса статьи
 */
abstract class Article
{
    public $title;
    public $text;
    public $data;
    public $id;

    abstract function PrintNews();
    abstract function __construct ($id);

}