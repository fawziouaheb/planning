<?php 
namespace Model;
class Matter{
   public function __construct(protected string $name, protected string $time,protected Teacher $teacher){
    
   }
}