<?php 
namespace Model;
use Variable\Role;

class Student extends Person{
  public function __construct(protected string $name, protected string $lastName ,protected string $passWord, protected string $email,protected bool $status = false,protected  ?string $date=null){
    parent::__construct( $name,$lastName , $passWord,$email,$status, $date);
    $this->role=Role::student;
  }
}

