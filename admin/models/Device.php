<?php
    function getAllMay(){
        $objMay= new Db();
        $query= "select * from maytinh order by mamay ASC";
        return $objMay->selectQuery($query);
    }
    function getMayById($id){
        $objMay= new Db();
        $query="select * from maytinh where mamay=?";
        return $objMay->selectQuery($query, [$id]);
    }
    function getMayByPhong($maphong){
        $objMay= new Db();
        $query= "select * from maytinh where maphong=? order by MaMay ASC";
        return $objMay->selectQuery($query, [$maphong]);
    }
    function insertMay($value){
        $objMay= new Db();
        $query="insert into maytinh(MaMay, MaPhong) values(?,?)";
        return $objMay->insertQuery($query, $value);
    }
    function deleteMay($mamay){
        $objMay= new Db();
        $query= "delete from maytinh where MaMay=?";
        return $objMay->insertQuery($query, [$mamay]);
    }
?>