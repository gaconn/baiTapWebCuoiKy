<?php
    function getAllNhatKySuaMay(){
        $obj= new Db();
        $query= "select * from nhatkysuamay";
        return $obj->selectQuery($query);
    }
    function getNhatKyById($id){
        $obj= new Db();
        $query= "select * from nhatkysuamay where manhatky=?";
        return $obj->selectQuery($query, $id);
    }
    function getNhatKyByMay($maMay){
        $obj= new Db();
        $query= "select * from nhatkysuamay where maMay= ?";
        return $obj->selectQuery($query, [$maMay]);
    }
?>