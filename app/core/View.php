<?php


namespace app\core;


class View
{
    /**
     * current route
     * @var array
     */
    public array $route = [];

    /**
     * current view
     * @var
     */
    public $view;

    /**
     * current template
     * @var
     */
    public $layout;

    /**
     * View constructor.
     * @param $route
     */
    public function __construct($route,$view='',$layout=''){
        var_dump($layout);
        var_dump($view);
        $this->route = $route;
        if($layout===false){
            $this->layout = false;
        }else{
            $this->layout = $layout ? : LAYOUT;
        }
        $this->view = $view;
    }

    public function render($vars){
        if(is_array($vars)) {
            extract($vars);
        }
        //debug($vars);
        //тут баг, надо поправить!
        $fileView = ROOT.'app/view/'.$this->route['controller'].'/'.$this->view.'.php';

        ob_start();
        if(file_exists($fileView)){
            require($fileView);
        }else{
            echo "View: $fileView - не найден";
        }
        $content = ob_get_clean();
        if($this->layout!==false){
            $fileLayout = ROOT.'app/view/layouts/'.$this->layout.'.php';
            if(file_exists($fileLayout)){
                require($fileLayout);
            }else{
                echo "Шаблон: $fileLayout - не найден";
            }
        }else{

        }

    }
}