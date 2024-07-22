<?php

function get_page()
{
    if(isset($_GET['page'])) 
    {
        return $_GET['page'];
    }
    return 'main';
}

function get_par($par)
{
    if(isset($_GET[$par])) 
    {
        return $_GET[$par];
    }
    return false;
}