<?php

class Database
{
    var $cnn;
    function __construct()
    {
        
        $option=array(PDO:: MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
        $this->cnn=new PDO('mysql:host=localhost; dbname=qlyhocsinh','root','',$option);
    }
    function __destruct()
    {
        $this->cnn=null;
    }
    //phuong thuc/ham thuc thi cau lenh sql
    public function exec_select($sql)
    {
        $stm=$this->cnn->prepare($sql);
        $stm->execute();
        $result=$stm->fetchAll(pdo::FETCH_ASSOC);
        return $result;
    }
    //phuong thuc/ham thuc thi lenh insert
    public function exec_insert($sql)
    {
        $stm=$this->cnn->prepare($sql);
        $stm->execute();
        if($stm)
            return true;
        else
            return false;
    }
    
}



?>