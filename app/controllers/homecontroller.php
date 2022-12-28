<?php

namespace App\controllers;
use App\core\controller;
use App\models\home;



class homecontroller extends controller{

    public function index(){
        $data = new home();
        $d = $data->getAllData();
        $title = "home";
        $this->view("home/index",["title"=>$title,"d" => $d]);
    }
    public function details($id)
    {
        $data = new home();
        $d = $data->getData($id);
        
        $title = "details";
        $this->view("home/details", ["title" => $title, "d" => $d]);
    }
    
}
