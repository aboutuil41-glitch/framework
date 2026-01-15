<?php

namespace App\core;


abstract class BaseController
{
protected function view($view , $data = []){
extract($data);

$path = dirname (__DIR__) .'/../src/view/'. $view . '.php';

if(!file_exists($path)){
    http_response_code(404);
echo 'Not Found';
return;
}

require $path;

}



}

?>
