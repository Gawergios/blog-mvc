<?php
namespace App\core;

class helpers 
{
    public static function redirect($path){
        header("LOCATION:http://mymvc.test/".$path);

    }
}