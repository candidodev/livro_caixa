<?php
namespace App\Controllers;

class User extends BaseController
{
    public function __construct(){
        $this->model = model('User');
        $this->session= session();
    }

    public function index()
    {
        echo "aqui";
    }

    public function login(){
        return view("user/login");
    }

    public function auth(){
        if($this->request->getMethod()==="post"){
            echo "Aqui!";
        }
        $email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
        $this->model->where("email",$email);
        $this->model->where("password", md5($password));
        var_dump($_REQUEST);
        echo $email;
        echo "<br/>";
        echo $password;
        echo "<br/>";
        echo md5($password);
        $user=$this->model->find();
        var_dump($user);
        if($user){
            $session->set('user', $user);
            $msg['msg']="Login realizado com sucesso!";
            $msg['class']="success";
            $this->session->setFlashdata('msg',$msg);
        }else{
            $msg['msg']="Login falhou!";
            $msg['class']="danger";
            $this->session->setFlashdata('msg',$msg);
        }
        //return redirect()->route("/");
    }

    public function logout(){

    }
}