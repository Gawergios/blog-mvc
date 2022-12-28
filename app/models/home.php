<?php
namespace App\models;
use App\core\model;

class home extends model
{
    public function getAllData()
    {
        $data =  model::db()->rows("SELECT * FROM `post`");
        return $data;
    }
    public function getData($id)
    {
        $data =  model::db()->row("SELECT * FROM `post` where `id` = $id");
        return $data;
    }
}