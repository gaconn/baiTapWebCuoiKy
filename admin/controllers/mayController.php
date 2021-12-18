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
            $maphong= Utilities::get("maphong");
            $dsMay= getMayByPhong($maphong);
            include "./views/may/index.php";
            break;
        case 'detail':
            $mamay= Utilities::get("mamay");
            include "./models/NhatKySuaLoi.php";
            include './models/NhatKyLoi.php';
            include "./models/Device.php";
            $may= getMayById($mamay);
            
            $maphong= $may[0]["MaPhong"];
            $dsMay= getMayByPhong($maphong);
            $dsSuaLoi= getNhatKyByMay($mamay);
            $dsBaoCao= getNhatKyLoiByMay($mamay);
            include './views/may/index.php';
            break;
        case 'deleteNKS':
            $manks= Utilities::get("manks");
            $maphong= Utilities::get("maphong");
            $mamay= Utilities::get("mamay");
            include './models/NhatKySuaLoi.php';
            $row= deleteNhatKySuaMay($manks);

            $result=["success"=> false, "message"=> ""];
            if($row>0){
                $result=["success"=> true, "message"=>"Đã xóa thành công"];
            }else{
                $result=["success"=> false,"message"=>"Có lỗi xảy ra. Xóa thất bại!"];
            }
            include './models/Device.php';
            include './models/NhatKyLoi.php';
            $may= getMayById($mamay);
            $dsMay= getMayByPhong($maphong);
            $dsSuaLoi= getNhatKyByMay($mamay);
            $dsBaoCao= getNhatKyLoiByMay($mamay);
            
            include "./views/may/index.php";
            break;
        case 'updateNKS':
            $manks= Utilities::post("manks");
            $suco= Utilities::post("loailoi");
            $mota= Utilities::post("mota");
            $ngaysuaxong=Utilities::post('ngaysuaxong');
            $ngaysuaxong= Utilities::formatDatetime($ngaysuaxong);
            $mamay= Utilities::get("mamay");
            $maphong= Utilities::get("maphong");
            include "./models/NhatKySuaLoi.php";
            $row= updateNhatKySuaMay([$suco,$mota,$ngaysuaxong,$manks]);
            $result=["success"=> false, "message"=>""];
            if($row>0){
                $result=["success"=>true, "message"=>"Đã cập nhật thành công"];
            }else{
                $result=["success"=> false, "message"=> "Cập nhật không thành công."];
            }
            include './models/Device.php';
            include './models/NhatKyLoi.php';
            $may= getMayById($mamay);
            $dsMay= getMayByPhong($maphong);
            $dsSuaLoi= getNhatKyByMay($mamay);
            $dsBaoCao= getNhatKyLoiByMay($mamay);
            include './views/may/index.php';
            break;
        case 'add':
            $loaiLoi= Utilities::post("loailoi");
            $moTa= Utilities::post("mota");
            $ngaysuaxong= Utilities::post("ngaysuaxong");
            $manks= Utilities::generateId(5);
            $mamay= Utilities::get("mamay");
            $maphong= Utilities::get("maphong");
            include "./models/NhatKySuaLoi.php";
            $row= insertNhatKySuaLoi([$manks,$loaiLoi,$mamay,$moTa, $ngaysuaxong]);
            $result= ["success"=>false, "message"=>""];

            if($row>0){
                $result=["success"=>true, "message"=>"Đã thêm thành công nhật ký"];    
            }else{
                $result=["success"=>false, "message"=>"Có lỗi xảy ra. Vui lòng thử lại"];
            }
            include './models/Device.php';
            include './models/NhatKyLoi.php';
            $may= getMayById($mamay);
            $dsMay= getMayByPhong($maphong);
            $dsSuaLoi= getNhatKyByMay($mamay);
            $dsBaoCao= getNhatKyLoiByMay($mamay);
            include './views/may/index.php';
            break;
        case "list":
            include "./models/Device.php";
            $dsMay= getAllMay();
            include "./views/may/list.php";
            break;
        case 'addMay':
            $mamay= Utilities::post("mamay");
            $maphong= Utilities::post("maphong");
            include "./models/Device.php";
            $row= insertMay([$mamay,$maphong]);
            $result=["success"=>false, "message"=>""];
            if($row>0){
                $result=["success"=>true, "message"=>"Đã thêm 1 máy mới thành công"];
            }else{
                $result=["success"=>false, "message"=>"Thêm không thành công. Mã máy không được trùng"];
            }
            $dsMay= getMayByPhong($maphong);
            include './views/may/index.php';
            break;
        case 'deleteMay':
            $mamay= Utilities::post("mamay");
            $maphong= Utilities::post("maphong");
            include './models/Device.php';
            $row= deleteMay($mamay);
            $result= ["success"=> false, "message"=>""];
            if($row>0)
            {
                $result=['success'=>true,"message"=>"Đã xóa thành công"];
            }else{
                $result=["success"=>false, "message"=>"Xóa thất bại. Không thể xóa máy đang chứa dữ liệu lỗi"];
            }
            $dsMay= getMayByPhong($maphong);
            include './views/may/index.php';
            break;
        default:
            # code...
            break;
    }

?>