<?php


class Renderer
{

    public static function render(string  $view, array $data = [])
    {

        extract($data);

        ob_start();
        if($view == "index.php"){
            require($view);
        }else {
            require('templates/' .  $view);
        }
       
        
        $pageContent = ob_get_clean();

        require('templates/layout/layout.html.php');
    }




}