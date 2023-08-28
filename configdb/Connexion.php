<?php

namespace Configdb;
use Variable\DbInfo;
use \PDO;
abstract class Connexion
{
    public static function Connect(){
        return new PDO(DbInfo::system->value.":dbname=".DbInfo::nameBase->value.";host=".DbInfo::hote->value,DbInfo::user->value,DbInfo::passWord->value);
    }
}
