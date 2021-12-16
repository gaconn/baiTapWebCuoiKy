<?php
    function getAllMay(){
        $objMay= new Db();
        $query= "select * from maytinh";
        return $objMay->selectQuery($query);
    }
    function getMayById($id){
        $objMay= new Db();
        $query="select * from maytinh where mamay=?";
        return $objMay->selectQuery($query, [$id]);
    }
    function getMayByPhong($maphong){
        $objMay= new Db();
        $query= "select * from maytinh where maphong=?";
        return $objMay->selectQuery($query, [$maphong]);
    }
?>