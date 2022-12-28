<?php

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';

    die();
}

function urlIs($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}
