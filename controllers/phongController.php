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
            $mamay= Utilities::post("mamay");
            $tinhTrang= Utilities::post("suco");
            $maphong= Utilities::get("maphong");
            $ngay= date("Y-m-d H:i:s");
            include "./models/NhatKyLoi.php";
            include './models/Device.php';
            echo "tinhtrang".$tinhTrang."tinhtrang";
            $row=insertNhatKyLoi([$maNhatKy,$tinhTrang,$ngay,$mamay]);
            $result=["success"=> false, "message"=>""];

            if($row>0){
                $result=["success"=>true, "message"=>"Báo cáo đã được gửi đến quản trị viên."];
            }else{
                $result=["success"=>false, "message"=>"Có lỗi xảy ra."];
            }
            include "./models/Phong.php";
            $dsMay= getMayByPhong($maphong);
            include "./views/phong/index.php";
            break;
        default:
            # code...
            break;
    }
?>