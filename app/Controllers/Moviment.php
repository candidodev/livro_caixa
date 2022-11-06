<?php
namespace App\Controllers;

class Moviment extends BaseController
{
    public function __construct(){
        $this->session= session();
        if(!isset($session->user)){
            return redirect()->to("/user/login");
        }
    }

    public function index()
    {
        $this->model = model('Moviment');
        $data['moviments']=$moviments=$this->model->find();
        $data['cashBalance']=$moviments=$this->model->cashBalance();
        return view('moviments/moviments', $data);
    }

    public function add()
    {
        return view('moviments/formMoviment');
    }

    public function save()
    {
        if($this->request->getMethod()==="post"){
            $moviment=$this->request->getPost('moviment');
            $moviment['user_id']=1;
            $this->model = model('Moviment');
            if($this->model->save($moviment)){
                $msg['msg']="Moviment saved successfully!";
                $msg['class']="success";
            }else{
                $msg['msg']="Moviment not saved!";
                $msg['class']="danger";                
            }  
            $this->session->setFlashdata('msg',$msg);     
        }
        return redirect()->to(base_url()."/moviments");
    }
}