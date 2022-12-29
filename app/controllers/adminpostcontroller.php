<?php

namespace App\controllers;

use App\core\controller;
use App\core\helpers;
use App\core\Session;
use App\models\admin;
use Rakit\Validation\Validator;

class adminpostcontroller extends controller
{
    public $userdata;
    public function __construct()
    {

        Session::Start();
        $this->userdata = Session::Get('user');
        if (empty($this->userdata)) {
            helpers::redirect('user/login');
        }
    }

    public function index()
    {
        $data = new admin();
        $d = $data->getAllData();
        $this->view("admin/viewall", ["d" => $d]);
    }

    public function delete($id)
    {
        $delete = new admin();
        $data = $delete->delete($id);
        if ($data) {
            helpers::redirect('adminpost/index');
        }
    }

    public function add()
    {
        $this->view("admin/addpost", []);
    }
    public function postAdd()
    {
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'title'    => 'required',
            'artical'  => 'required',
            'img'      => 'required|uploaded_file:0,500K,png,jpeg'
        ]);
        $validation->validate();
        if ($validation->fails()) {
            $errors = $validation->errors();
            $this->view("admin/addpost", ['errors' => $errors->firstOfAll()]);
        } else {
            if (isset($_FILES['img'])) {
                $img = $_FILES['img']['name'];
                $tmp = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp, "front/img/" . $img);
                $insert = new admin();
                $insert->insert($_POST['title'],  $_POST['artical'], $img, $this->userdata['id']);
                helpers::redirect('adminpost/index');
            }
        }
    }

    public function update($id)
    {
        $select = new admin();
        $data = $select->getData($id);

        $this->view("admin/update", ["data" => $data]);
    }
    public function updateData()
    {
        if (isset($_FILES['img'])) {
            $img = $_FILES['img']['name'];
            $tmp = $_FILES['img']['tmp_name'];
            $upload = move_uploaded_file($tmp, "front/img/" . $img);
            if ($upload) {
                $data = [
                    'title' => $_POST['title'],
                    'artical' => $_POST['artical'],
                    'img' => $img
                ];
            } else {
                $data = [
                    'title' => $_POST['title'],
                    'artical' => $_POST['artical']
                ];
            }
        }
        $update = new admin();
        $update->update($_POST['id'], $data);
        helpers::redirect("adminpost/index");
    }
}
