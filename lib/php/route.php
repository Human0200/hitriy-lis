<?php
class Router 
{
    private $pages = array(); //Переменная массива страниц

    function addRoute($url, $path){
        $this->pages[$url] = $path; //url и путь до файла
    }

        function route($url){ //функция принимающая url
        $path = $this->pages[$url]; // обращаемся к pages и передаем url
        $file_dir = "pages/".$path;
        if($path == "") { //если путь пустой то подгружаеи страницу 404
            require "404.php";
            die();
        } 

        if(file_exists ($file_dir) ){ //если файл существует подключаем его через request
            require $file_dir;
        }else{
            require "404.php";
            die();
        }

    }
}

?>