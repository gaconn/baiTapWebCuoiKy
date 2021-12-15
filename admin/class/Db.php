<?php
    class Db{
        private static $pdo;
        function __construct(){
            self::$pdo = new PDO("mysql:host=".HOST.";dbname=".DBNAME,USER, PASSWD );
            self::$pdo->query(" set names utf8");
        }
        public function selectQuery($query, $condition=[]){
            $stm= self::$pdo->prepare($query);
            $stm->execute($condition);
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        }
        public function insertQuery($query, $value=[]){
            $stm= self::$pdo->prepare($query);
            $stm->execute($value);
            return $stm->rowCount();
        }
    }
?>