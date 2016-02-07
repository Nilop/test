<?php

/**
 Здесь описывается класс новости;
 */

require __DIR__ . "/Article.php";

class NewsArticle extends Article
{
    public function __construct ($data)
    {
        $this->title = $data['title'];
        $this->text = $data['text'];
        $this->data = $data['data'];
        $this->id = $data['id'];
    }

    public function PrintNews()
    {
        echo '<h1>' . $this->title . '</h1>';
        echo '<span>' . $this->data . '</span>';
        echo '<p>' . $this->text . '</p>';
    }

    public function PrintNewsTitleLink()
    {
        echo '<h3><a href="/controller/news.php?newsid='. $this->id . '">';
        echo $this->title;
        echo "</a></h3>";
    }
}