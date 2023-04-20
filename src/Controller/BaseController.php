<?php

namespace Controller;

class BaseController
{

    public function view(string $path, $params = null)
    {
        ob_start();
        $path = str_replace('.',DIRECTORY_SEPARATOR, $path);
        require  VIEWS . $path . '.php';
        if ($params){
            $params = extract($params);
        }
        $content = ob_get_clean();
    }

}