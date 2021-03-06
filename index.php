<?php
    if (!defined('BASE_URL'))
    {
        define('BASE_URL', '/PROJET4');
    }

    $url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';
    if($url == '/')
    {
        
        header("Location: post/list");
    }
    else if ($url[0] == 'admin' && !array_key_exists ( '1' , $url ))
    {
        header("Location: admin/index");
    }
    else
    {
        
        $controller = $url[0];
        $action = $url[1].'Action';
        $args = array_slice($url, 2);
        $ctrlPath = __DIR__.'/app/controllers/'.$controller.'Controller.php';
        
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