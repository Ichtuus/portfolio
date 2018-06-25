<?php
/**
 * Created by PhpStorm.
 * User: nicolas.diarra
 * Date: 25-06-18
 * Time: 14:51
 */

class UtilManager
{
    private $db;

    /***constructor of connexion*/
    public function __construct(PDO $connect)
    {
        $this->db=$connect;
    }




}