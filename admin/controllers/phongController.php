<?php
    $action= Utilities::get("action", 'index');
    switch ($action) {
        case 'index':
            include './models/Phong.php';
            $dsPhong= getAllPhong();
            include './views/phong/index.php';
            break;
        case 'add':
            $maPhong= Utilities::post("maPhong");
            $tenPhong= Utilities::post("tenPhong");
            include "./models/Phong.php";
            $result= checkPhongTonTai($maPhong, $tenPhong);
            if($result["success"]){
                $row= insertPhong([$maPhong,$tenPhong]);
                if($row <0){
                    $result["success"]= false;
                    $result["message"]= "Có lỗi xảy ra. Vui lòng thử lại";
                }
            }
            $dsPhong= getAllPhong();
            include "./views/phong/index.php";
            break;
        case 'delete':
            $maPhong= Utilities::get("maphong");
            include './models/Phong.php';
            $row= deletePhong($maPhong);
            $result=["success"=> false, "message"=>""];
            if($row>0){
                $result["success"]=true;
                $result["message"]="Xóa thành công!";
            }else{
                $result["success"]= false;
                $result["message"]= "Xóa thất bại. Chỉ có thể xóa phòng không có máy tính";
            }
            $dsPhong= getAllPhong();
            include "./views/phong/index.php";
            break;
        case "update":
            $maPhong= Utilities::post("maPhong");
            $tenPhong=Utilities::post("tenPhong");
            include "./models/Phong.php";
            $phongByName= getPhongByName($tenPhong);
            $result=["success"=>false, "message"=>""];
            if(count($phongByName)>0)
            {
                $result["success"]= false;
                $result["message"]= "Tên phòng đã tồn tại. Cập nhật không thành công";
            }else{

                $row= updatePhong($maPhong, $tenPhong);
                if($row>0){
                    $result["success"]= true;
                    $result["message"]= "Phòng đã được cập nhật";
                }else{
                    $result["success"]=false;
                    $result["message"]= "Có lỗi xảy ra. Vui lòng thử lại";
                }
            }
            $dsPhong= getAllPhong();
            include './views/phong/index.php';
            break;
        default:
            # code...
            break;
    }
    function checkPhongTonTai($maPhong, $tenPhong){
        $phongById= getPhongById($maPhong);
        $phongByName= getPhongByName($tenPhong);
        $result= ["success"=> false,"message"=>""];
            if(count($phongById)>0){
                $result["success"]= false;
                $result["message"]="Mã phòng đã tồn tại. Tạo phòng không thành công!";
            }else if(count($phongByName)>0){
                if($result["message"]!=""){
                    $result["success"]= false;
                    $result["message"]= "Mã phòng và tên phòng đã tồn tại. Tạo phòng không thành công";
                }else{
                    $result["success"]= false;
                    $result["message"]="Tên phòng đã tồn tại. Tạo phòng không thành công";
                }

            }else{
                $result["success"]= true;
                $result["message"]="Thêm thành công 1 phòng mới";
            }
            return $result;
    }
?>