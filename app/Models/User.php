<?php 
namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'user';
    
    public function list(){

    }
    
    public function login($email, $password){
        $where=['email'=>$email, 'password'=>$password];
        $data=['name','id_user','email'];
        $query=$this->where(where)->find($data);
    }
}