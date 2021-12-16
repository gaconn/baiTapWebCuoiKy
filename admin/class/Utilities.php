<?php
    class Utilities{
        public static function get($key, $defaultValue=""){
            return isset($_GET[$key])? trim($_GET[$key]):$defaultValue;
        }
        public static function post($key, $defaultValue=""){
            return isset($_POST[$key])? trim($_POST[$key]): $defaultValue;
        }
        public static function file($key, $defaultValue=[]){
            $file= isset($_FILES[$key])?$_FILES[$key]:$defaultValue;
            if($file[error]==0&& $file!=[]){
                return $file;
            }
            return $defaultValue;
        }
        public static function generateId($length){
            $base= "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            $arr= str_split($base);
            $id="";
            for($i=0;$i<$length;$i++){
                $index=round(rand(0, count($arr)));
                $id .= $arr[$index];
            }
            return $id;
        }
        public static function formatDatetime($date){
            $newDate= new Date($date);
            return $newDate->format("Y-m-d");
        }
    }
?>