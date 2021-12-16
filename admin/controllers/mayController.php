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
            $maphong= Utilities::get("maphong");
            include "./models/NhatKySuaLoi.php";
            include './models/NhatKyLoi.php';
            include "./models/Device.php";
            $may= getMayById($mamay);
            $dsMay= getMayByPhong($maphong);
            $dsSuaLoi= getNhatKyByMay($mamay);
            $dsBaoCao= getNhatKyLoiByMay($mamay);
            include './views/may/index.php';
            break;
        case 'deleteNKS':
            $manks= Utilities::get("manks");
            include './models/NhatKySuaLoi.php';
            $row= deleteNhatKySuaMay($manks);
            $result=["success"=> false, "message"=> ""];
            if($row>0){
                $result=["success"=> true, "message"=>"Đã xóa thành công"];
            }else{
                $result=["success"=> false,"message"=>"Có lỗi xảy ra. Xóa thất bại!"];
            }
            include './models/Device.php';
            $dsMay= getAllMay();
            include "./views/may/index.php";
            break;
        case 'updateNKS':
            $manks= Utilities::post("manks");
            $suco= Utilities::post("suco");
            $mota= Utilities::post("mota");
            $ngaysuaxong=Utilities::post('ngaysuaxong');
            $ngaysuaxong= Utilities::formatDatetime($ngaysuaxong);
            include "./models/NhatKySuaLoi.php";
            $row= updateNhatKySuaMay([$suco,$mota,$ngaysuaxong,$manks]);
            $result=["success"=> false, "message"=>""];
            if($row>0){
                $result=["success"=>true, "message"=>"Đã cập nhật thành công"];
            }else{
                $result=["success"=> false, "message"=> "Cập nhật không thành công."];
            }
            include './models/Device.php';
            $dsMay= getAllMay();
            include './views/may/index.php';
            break;
        case 'add':
            
        default:
            # code...
            break;
    }

?>