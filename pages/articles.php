<div class="article">    
    <h1>Híreink</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto omnis rem doloremque aut culpa dignissimos quaerat illum hic quod?</p>
</div>

<div class="news">
    <?php
        $articles = get_news_list(6);
        print_news_intro($articles);
    ?>
</div>