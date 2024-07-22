<?php
//error_reporting(E_ALL);
require_once('res/scripts/database.php');
require_once('res/scripts/elements.php');
require_once('res/scripts/pages.php');
require_once('pages/page-begin.html');

$page = get_page();
switch($page)
{
    case 'main':
        require_once('pages/page-main.html');
        break;
    case 'news':
        $article_id = get_par('article');
        if($article_id)
        {
            print_news_article($article_id);
        }
        else
        {
            require_once('pages/articles.php');
        }
        
        break;
    case 'cat':
        require_once('pages/catalogue.php');
        break;
    case 'partners':
        break;
    case 'contact':
        require_once('pages/contact-us.html');
        break;
    default:
        echo 'A keresett oldal nem található';
}
require_once('pages/page-end.html');