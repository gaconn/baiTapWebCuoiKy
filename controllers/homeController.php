<?php 
    $action= Utilities::get("action","index");
    switch ($action) {
        case 'index':
            include './models/Phong.php';
            $dsPhong= getAllPhong();
            include "./views/home/index.php";
            break;
        
        default:
            # code...
            break;
    }
?>