<?php
if (count($dsMay)>0){
    ?>
<div class="container border-top mt-5">

    <div class="row">
        <div class="col-3">
            <div class="list-title">
                <h3 class="text-secondary">Danh sách máy</h3>
                <a href="index.php?controller=may&action=list"><img src="resources/image/gear-option.png" alt="Sửa"
                        class="list-img"></a>
            </div>
            <ul class="list-group">
                <?php
                    foreach($dsMay as $item){
                        $active="";
                        $current= "";
                        if(isset($maMay)&&$maMay=$item["MaMay"]){
                            $active="active";
                            $current="aria-current='true'";
                        }
                        ?>
                <li class="list-group-item <?php echo $active ?>" <?php echo $current ?>>
                    <a class="btn btn-secondary d-block"
                        href="index.php?controller=may&action=detail&mamay=<?php echo $item["MaMay"] ?>"><?php echo $item["MaMay"] ?></a>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
        <div class="col-9">
            <h3 class="text-secondary text-center border-bottom">Thông tin máy</h3>
            <?php
                if(isset($maMay)){
                    ?>
            <h5>Mã máy: <?php echo $may["MaMay"] ?></h5>
            <h5>Danh sách các lỗi đã xử lý</h5>
            <?php
                            foreach($dsSuaLoi as $item){
                                ?>
            <div class="row">
                <div class="col-3"><?php echo $item["MaNhatKy"] ?></div>
                <div class="col-3"><?php echo $item["LoaiLoi"] ?></div>
                <div class="col-3"><?php echo $item["moTa"] ?></div>
                <div class="col-3"><?php echo $item["ngaySuaXong"] ?></div>
            </div>
            <?php
                            }
                        ?>
            <?php
                }
            ?>
        </div>
    </div>
</div>
<?php
}else{
    ?>
<h4 class="mt-5 text-secondary text-center">Phòng không có dữ liệu</h4>
<?php
}

?>
<style>
.list-title {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.list-img {
    width: 30px;
}
</style>