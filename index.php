<?php

    $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

    if($url == '/')
    {
        require_once __DIR__.'\temp\index.html';
    }
    else
    {
        $controller = $url[0];
        $action = $url[1].'Action';
        $args = array_slice($url, 2);

        $ctrlPath = __DIR__.'\app\controllers\\'.$controller.'Controller.php';
        if (file_exists($ctrlPath))
        {
            require_once $ctrlPath;
            $controllerName = ucfirst($controller).'Controller';

            $controllerObj = new $controllerName();
            
            if(isset($args[0]))
            {
                $controllerObj->$action($args[0]);
            }
            else
            {
                $controllerObj->$action();
            }
        }
    }