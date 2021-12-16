<?php

    function getAllPhong(){
        $objPhong= new Db();
        $query= "select * from phongmay";
        return $objPhong->selectQuery($query);
    }
    function getPhongById($id){
        $objPhong= new Db();
        $query= "select * from phongmay where maphong=?";
        return $objPhong->selectQuery($query, [$id]);
    }
    function getPhongByName($name){
        $objPhong=new Db();
        $query= "select * from phongmay where tenphong=?";
        return $objPhong->selectQuery($query, [$name]);
    }
    function insertPhong($value){
        $objPhong= new Db();
        $query= "insert into phongmay(maphong, tenphong) values(?,?)";
        return $objPhong->insertQuery($query, $value);
    }
    function deletePhong($maphong){
        $objPhong= new Db();
        $query="delete from phongmay where maphong=?";
        return $objPhong->insertQuery($query, [$maphong]);
    }
    function updatePhong($maphong,$tenphong){
        $objPhong=new Db();
        $query="update phongmay set tenphong=? where maphong=?";
        return $objPhong->insertQuery($query, [$tenphong, $maphong]);
    }
?>