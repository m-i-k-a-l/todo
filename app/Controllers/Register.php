<?php namespace App\Controllers;

class Register extends BaseController {

    public function index() {
        $data['title'] = 'Todo - Register';
        echo view('templates/header',$data);
        echo view('login/register',$data);
        echo view('templates/footer',$data);
    }
}