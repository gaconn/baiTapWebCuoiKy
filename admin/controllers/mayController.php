<?php
    $action = Utilities::get("action", "index");
    switch ($action) {
        case 'index':
            include "./models/Device.php";
            $dsMay= getAllMay();
            include "./views/may/index.php";
            break;
        case 'info':
            include "./models/Device.php";
            $maPhong= Utilities::get("maphong");
            $dsMay= getMayByPhong($maPhong);
            include "./views/may/index.php";
            break;
        case 'detail':
            $mamay= Utilities::get("mamay");
            include "./models/NhatKySuaLoi.php";
            include './models/NhatKyLoi.php';
            $dsSuaMay= getNhatKyByMay($mamay);
            $dsBaoCao= getNhatKyLoiByMay($mamay);
            include './views/may/index.php';
            break;
        default:
            # code...
            break;
    }

?>