<?php 
namespace App\Models;

use CodeIgniter\Model;

class Moviment extends Model
{
    protected $table = 'moviment';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['id', 'date','description','value','type','user_id'];
    
    public function getMoviments(){

    }
    public function listSummary(){
        $sql="SELECT distinct date, 
        (SELECT sum(value) from moviment where type='input' and date=m.date) AS input,
        (SELECT sum(value) from moviment where type='output' and date=m.date) AS output 
        FROM moviment m";
        $query=$this->db->query($sql);
        $moviments=null;
        foreach ($query->getResult() as $row) {
            $moviments[]=$row;
        }
        return $moviments;
    }

    public function cashBalance(){
       $sql="SELECT  
        (SELECT sum(value) from moviment where type='input' ) AS input,
        (SELECT sum(value) from moviment where type='output' ) AS output 
        ";
        $query=$this->db->query($sql);
        $cashBalance=$query->getResult();
        return $cashBalance[0];
    }
}