<?php
namespace app\core;
use app\controller\PostsController;
use app\core\View;

class Router
{
    /**
     * route table
     * @var array
     */
    protected static array $routes = [];

    /**
     * current route
     * @var array
     */
    protected static array $route = [];

    /**
     * add route in route table
     * @param string $regexp
     * @param array $route route ['controller, action, params']
     */
    public static function add(string $regexp, array $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    /**
     * return route table
     * @return array
     */
    public static function getRoutes(): array
    {
        return self::$routes;
    }

    /**
     * @return array
     */
    public static function getRoute(): array
    {
        return self::$route;
    }

    /**
     * search url in route table
     * @param string $url
     * @return bool
     */
    public static function match(string $url): bool
    {
        foreach (self::$routes as $pattern => $route) {
            if (preg_match("@$pattern@i", $url, $matches)) {
                foreach ($matches as $controller => $action) {
                    if (is_string($controller)) {
                        $route[$controller] = $action;
                    }
                }
                if (!isset($route['action'])) {
                    $route['action'] = 'index';
                }
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    /**
     * redirect url to current route
     * @param $url
     */
    public static function dispatch($url){
        $url = self::removeGetQuery($url);
        //var_dump($url);
        if (self::match($url)) {
            $controller = "app\controller\\" . ucfirst(self::$route['controller']) . "Controller";
            $action = self::$route['action'];
            if (class_exists($controller)) {
                $obj = new $controller(self::$route);
                if (method_exists($controller, $action)) {
                    $obj->$action();
                    $obj->getView();
                } else {
                    echo "method not found";
                }
            } else {
                echo "class not found";
            }
        } else {
            http_response_code(404);
            include('public/404.html');
        }
    }

    /**
     *
     * @param $url
     * @return mixed|string
     */
    protected static function removeGetQuery($url)
    {
        if ($url) {
            $params = explode('&', $url);
            //debug($params);
            if(!str_contains($params[0], "=")){
                return rtrim($params[0], '/');
            }else{
                return '';
            }
        }
        //print_r($url);
        return $url;
    }
}
