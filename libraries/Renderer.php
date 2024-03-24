<?php


class Renderer
{

    public static function render(string  $view, array $data = [])
    {

        extract($data);

        ob_start();
        require('templates/' .  $view . '.html.php');
        $pageContent = ob_get_clean();

        require('templates/layout/header.html.php');
    }




}