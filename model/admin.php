<?php

namespace Model;
use Interfaces\DbFunction;
use Variable\Role;

class admin extends Person{
    public function __construct(protected string $name, protected string $lastName ,protected string $passWord, protected string $email,protected bool $status = false,protected  ?string $date=null){
        parent::__construct( $name,$lastName , $passWord,$email,$status, $date);
        $this->role = Role::admin;
      }
      public function selectAllStudent():\PDOStatement{
        $stmt = $this->db->prepare("SELECT * FROM person WHERE status = ?");
        $stmt->execute(array(0));
        return $stmt;
      }

}
