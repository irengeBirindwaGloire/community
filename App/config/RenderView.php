<?php

namespace config;

class RenderView
{
    private $container;

    public static function render(string $path, array $variables = [])
    {
        extract($variables);
        ob_start();

        require_once("views/" . $path . '.html.php');
        $container = ob_get_clean();
        require_once("views/layout.html.php");
    }

    public static function flashMessage($message, string $type)
    {
        return "<div class='alert alert-" . $type . " alert-dismissible shadow'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                    <h5><i class='icon fas fa-info'></i> Alert!</h5>   
                    <div>" . $message . "</div>   
                 </div> ";
    }
}
