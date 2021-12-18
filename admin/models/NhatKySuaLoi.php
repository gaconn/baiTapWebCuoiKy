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
        $query= "select * from nhatkysuamay where maMay= ? order by ngaySuaXong DESC";
        return $obj->selectQuery($query, [$maMay]);
    }
    function deleteNhatKySuaMay($manks){
        $obj=new Db();
        $query="delete from nhatkysuamay where manhatky=?";
        return $obj->insertQuery($query, [$manks]);
    }
    function updateNhatKySuaMay($value){
        $obj= new Db();
        $query= "update nhatkysuamay set loailoi=?, mota=?, ngaysuaxong=? where manhatky=?";
        return $obj->insertQuery($query, $value);
    }
    function insertNhatKySuaLoi($value){
        $obj= new Db();
        $query= "insert into NhatKySuaMay(MaNhatKy,LoaiLoi, MaMay, moTa, ngaySuaXong) values(?,?,?,?,?)";
        return $obj->insertQuery($query, $value);
    }
?>