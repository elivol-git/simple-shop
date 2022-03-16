<?php


namespace App\Controller;


class AppController
{
    protected function view(string $page, $data=[])
    {
        require_once APP_ROOT . '/app/View/main.php';
    }
}