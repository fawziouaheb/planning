<?php

namespace Interfaces;

interface DbFunction
{
    public function insert():bool;
    public function update():bool;
    public function delete($id):bool;



}
