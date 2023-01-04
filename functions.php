<?php

function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';

    die();
}

function urlIs(string $url): bool
{
    return $_SERVER['REQUEST_URI'] === $url;
}

function authorize(bool $condition, int $status = Response::FORBIDDEN): void
{
    if (!$condition) {
        abort($status);
    }
}
