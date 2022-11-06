<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function __construct(){
        $session= session();
        
        if(!isset($session->user)){
            return redirect()->to("/user/login");
        }
    }

    public function index()
    {
        $this->model = model('Moviment');
        $data['moviments']=$moviments=$this->model->listSummary();
        $data['cashBalance']=$moviments=$this->model->cashBalance();
        return view('home/dashboard', $data);
    }
}
