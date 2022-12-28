<?php
namespace App\models;
use App\core\model;
class admin extends model
{
    public function getAllData(){
        $data =  model::db()->rows("SELECT * FROM `post`"); 
        return $data;
    }
    public function delete($id)
    {
        $data =  model::db()->deleteById('post', $id);
        return $data;
    }

    public function getData($id)
    {
        $data =  model::db()->row("SELECT * FROM `post` where `id` = $id");
        return $data;
    }

    
    public function insert($title, $artical,$img,$userid)
    {
        $data = [
            'title' => $title,
            'artical' => $artical,
            'img' =>$img,
            'user_id'=>$userid
        ];
        model::db()->insert('post', $data);
    }

    public function update($id, $data)
    {
        
        $data = model::db()->update('post', $data, ['id' => $id]);
    }
    
}