<?php
    function getAllNhatKy(){
        $obj= new Db();
        $query= "select * from nhatkyloi ";
        return $obj->selectQuery($query);
    }
    function getAllNhatKyId($id){
        $obj=new Db();
        $query="select * from nhatkyloi where manhatkyloi=?";
        return $obj->selectQuery($query, [$id]);
    }
    function getNhatKyLoiByMay($id){
        $obj= new Db();
        $query= "select * from nhatkyloi where mamay=?";
        return $obj->selectQuery($query,[$id]);
    }
    function insertNhatKyLoi($value){
        $obj=new Db();
        $query= "insert into nhatkyloi(MaNhatKyLoi, suco, thoigianloi,mamay)";
        return $obj->insertQuery($query, $value);
    }

?>