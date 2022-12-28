<?php

namespace App\controllers;

use App\core\controller;
use App\models\user;
use Rakit\Validation\Validator;
use App\core\Session;
use App\core\helpers;

class usercontroller extends controller
{
    public function __construct()
    {
        Session::Start();
    }
    
    public function login()
    {
        $this->view("home/login",["title"=>"login"]);
    }
    public function postLogin()
    {
        $validator = new Validator();
        $validation = $validator->make($_POST ,[
            'email'   => 'required|email',
            'password'=> 'required'
        ]);

        $validation->validate();
        if ($validation->fails()) {
            $errors = $validation->errors();
            $this->view("home/login", ["title" => "login","error"=> $errors->firstOfAll()]);
        } else {
            // validation passes
            $user = new user();
            $data = $user->getUser($_POST['email'],$_POST['password']);
            Session::Set('user',$data);
            helpers::redirect("adminpost/index");
        }
    }
    
    public function logout()
    {
        Session::Stop();
        $this->view("home/login", ["title" => "login"]);
    }
    public function register()
    {

        $title = "registeration page";
        $this->view("home/register", ["title" => $title]);
    }

    public function postRegister()
    {
        $title = "registeration page";
        $validator = new Validator;

        $validation = $validator->make($_POST, [
            'name'             => 'required',
            'email'            => 'required|email',
            'password'         => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        $validation->validate();
        if ($validation->fails()) {
            $errors = $validation->errors();
            $this->view("home/register",["title" => $title,"error"=>$errors->firstOfAll()]);
        } else {
            $user = new user();
            $data = $user->register($_POST['name'], $_POST['email'], $_POST['password']);
            Session::Set('user', $data);
            helpers::redirect("user/login");
        }
    }
    
}













