<?php

namespace App\core;

class controller{
    public function view($path,$pram){
        extract($pram); //make array(key & var)
        require_once(VIEW.$path.".php");  //bgib  index.php msln aw hsb hktb eh
    }
    
}