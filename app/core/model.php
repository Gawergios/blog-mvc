<?php
namespace App\core;

use Dcblogdev\PdoWrapper\Database;


class model{

    public static function db()
    {
        $options = [
            //required
            'username' => 'root',
            'database' => 'blog',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => 'localhost',
            'port' => '3306'
        ];
        return $db = new Database($options);
    }
}