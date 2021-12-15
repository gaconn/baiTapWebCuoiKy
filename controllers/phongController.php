<?php
    $action= Utilities::get("action", "index");
    switch ($action) {
        case 'index':
            $maphong= Utilities::get("maphong");
            if($maphong!=""){
                include "./models/Device.php";
                $dsMay= getMayByPhong($maphong);
                include "./views/phong/index.php";
            }
            break;
        case "info":
            $mamay= Utilities::get("mamay");
            if($mamay!=""){
                include "./models/NhatKySuaLoi.php";
                include "./models/NhatKyLoi.php";
                $dsNhatKyLoi= getNhatKyLoiByMay($mamay);
                $dsNhatKySua= getNhatKyByMay($mamay);
                include "./views/phong/info.php";
            }
            break;
        case "report":
            $mamay= Utilities::get("mamay");
            if($mamay!=""){
                include "./models/Device.php";
                $may= getMayById($mamay);
                include "./views/phong/report.php";
            }
            break;
        case "submitReport":
            $maNhatKy= Utilities::generateId(5);
            $tinhTrang= Utilities::post("description");
            $mamay= Utilities::post("mamay");
            $ngay= date("Y-m-d");
            include "./models/NhatKyLoi.php";
            $row=insertNhatKyLoi([$maNhatKy,$tinhTrang,$ngay,$mamay]);
            $message= $row>0?"Đã gửi báo cáo đến quản trị viên.":"";
            include "./pages/notification/success.php";
            include "./models/Phong.php";
            $dsMay= getMayByPhong($maphong);
            include "./views/home/index.php";
            break;
        default:
            # code...
            break;
    }
?>