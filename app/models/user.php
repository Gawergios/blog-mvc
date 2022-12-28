<?php
namespace App\models;
use App\core\model;

class user extends model{

    public function getUser($email,$password)
    {
        $data =  model::db()->row("SELECT * FROM `users` where `email`= ? && `password`= ? " , [$email,$password]);
        return $data;
    }
    public function register($name,$email, $password)
    {

    $data = [
        'name' => $name,
        'email' => $email,
        'password'=> $password
    ];
        $user=model::db()->insert('users', $data);
    }
}



