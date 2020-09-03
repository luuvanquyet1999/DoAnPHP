<?php
class App{

    protected $controller="WebsiteHome";
    protected $action="View";
    protected $params=[];

    function __construct()
    {

        $arr = $this->UrlProcess();
//         Controller
        $temp=0;
        if (file_exists("./mvc/controller/web/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
            $temp=1;
        }elseif (file_exists("./mvc/controller/nhanvien/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
            $temp=2;
        }
        if ($temp<2){
            require_once "./mvc/controller/web/" . $this->controller . ".php";
        }else{
            require_once "./mvc/controller/nhanvien/" . $this->controller . ".php";

        }
        $this->controller = new $this->controller;

        // Action
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }elseif (!method_exists('post', $arr[1])) {
                $this->action="BaiViet";
                    $arr[2]=$arr[1];
            }elseif (!method_exists('archive', $arr[1])){
                    $this->action="BaiViet";
                    $arr[2]=$arr[1];
            }
        }

            if (!empty($arr[2])){
                unset($arr[1]);
                $this->params = $arr?array_values($arr):[$arr[2]];
            }else{
                $this->params = $arr?array_values($arr):[];
            }
         call_user_func_array([$this->controller, $this->action], $this->params );
    }

    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

}
?>