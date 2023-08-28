<?php 
namespace Model;
use Interfaces\DbFunction;
use \PDO;

use Configdb\Connexion;
use Variable\Role;


abstract class Person implements DbFunction {
    protected PDO $db;
    protected Role $role;
   public function __construct(protected string $name, protected string $lastName ,protected string $passWord, protected string $email,protected bool $status,protected  ?string $date=null){
     $this->db = Connexion::Connect();

   }
    public function insert():bool{        
       $query = "INSERT INTO person(nom,	prenom,	mot_de_passe,	email,	role,	status,	date_inscription) VALUES ( ?, ?, ?, ?, ?, ?, CURRENT_TIME())";
       $stmt = $this->db->prepare($query);
       return $stmt->execute(array($this->name,$this->lastName,$this->passWord,$this->email,$this->role->value,0));
    }
    public function update():bool{
        

    }
    public function delete( $id ):bool{
      $query = "DELETE FROM Person WHERE id = ?";
      $stmt = $this->db->prepare($query);
      return $stmt->execute($id);
    }
    

}