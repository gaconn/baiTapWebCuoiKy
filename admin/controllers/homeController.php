<?php
    $action= Utilities::get("action", "index");
    switch ($action) {
        case 'index':
            include "./models/NhatKyLoi.php";
            $dsNhatKyLoi= getNhatKy();
            include "./views/home/index.php";
            break;
        case "reportInfo":
            include "./models/NhatKyLoi.php";
            include "./models/Device.php";
            include "./models/Phong.php";
            include "./models/NhatKySuaLoi.php";
            $mamay= Utilities::get("mamay");
            $dsNhatKyLoi= getNhatKyLoiByMay($mamay);
            $may= getMayById($mamay);
            $phong= getPhongById($may[0]["MaPhong"]);
            $dsNhatKySuaLoi= getNhatKyByMay($mamay);
            include "views/home/reportInfo.php";
            break;
        default:
            # code...
            break;
    }
?>