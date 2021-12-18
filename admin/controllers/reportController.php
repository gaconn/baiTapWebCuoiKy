<?php 
    $action= Utilities::get("action","index");
    switch ($action) {
        case 'index':
            include "./models/NhatKyLoi.php";
            $dsBaoCao= getAllNhatKy();
            include './views/report/index.php';
            break;
        default:
            # code...
            break;
    }
?>