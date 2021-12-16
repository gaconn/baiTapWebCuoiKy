<?php

    function getAllPhong(){
        $objPhong= new Db();
        $query= "select * from phongmay";
        return $objPhong->selectQuery($query);
    }
    function getPhongById($id){
        $objPhong= new Db();
        $query= "select * from phong where maphong=?";
        return $objPhong->selectQuery($query, [$id]);
    }
?>