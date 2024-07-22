<?php

function print_fish_table($nitems)
{
    echo '<table class="fish-table">
            <thead>
                <th>Kép</th>
                <th>Megnevezés</th>
                <th>Ár</th>
                <th>Kosárba</th>
            </thead>';
    
    $items = get_fish_list($nitems);
    foreach($items as $fish)
    {
        echo '<tr>
            <td><img src="res/db/fish/'.$fish['imgfile']. '" alt=""></td>
            <td>'.$fish['name'].'</td>
            <td>'.$fish['price'].'</td>
            <td><a href="">Kosárba</a></td>       
        </tr>';
    }
    echo '</table>';
}

function print_services_table($nitems)
{
    echo '<table>
            <thead>
                <th>Megnevezés</th>
                <th>Leírás</th>
                <th>Ár</th>
                <th>Kosárba</th>
            </thead>';
    
    $items = get_services_list($nitems);
    foreach($items as $service)
    {
        echo '<tr>
            <td>'.$service['name'].'</td>
            <td>'.$service['description'].'</td>
            <td>'.$service['price'].' '.$service['unit'].'</td>
            <td><a href="">Kosárba</a></td>       
        </tr>';
    }
    echo '</table>';
}

function print_news_intro($articles)
{
    foreach($articles as $article)
    {
        $intro = substr($article['content'], 0, 200);
        echo '
        <article>
            <img src="res/db/news/'.$article['imgpath'].'" alt="">
            <div class="info">
                <h3>'.$article['title'].'</h3>
                <p>'.$intro.'...</p>
                <a class="button" href="?page=news&article='.$article['id'].'">Bővebben</a>
            </div>
        </article>';
    }
}

function print_news_article($id)
{
    $article = get_news($id);
    echo '
        <div class="article">
            <h2>'.$article['title'].'</h2>
            <img src="res/db/news/'.$article['imgpath'].'" alt="">
            <p>'.$article['content'].'</p>
        </div>';
}