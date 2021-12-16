<div class="container mt-5">
    <h4>Mã máy: <?php echo $may[0]["MaMay"] ?></h4>
    <h4>Tên phòng: <?php echo $phong[0]["TenPhong"] ?> </h4>
    <h4 class="mt-2">Các sự cố được báo cáo:</h4>
    <?php
        if(count($dsNhatKyLoi)>0){
            ?>
    <div>
        <div class="row border-bottom mt-3">
            <div class="col-4">
                <h5>Mã</h5>
            </div>
            <div class="col-4">
                <h5>sự cố</h5>
            </div>
            <div class="col-4">
                <h5>Thời gian lỗi</h5>
            </div>
        </div>
        <?php
                    foreach($dsNhatKyLoi as $item){
                        ?>
        <div class="row border-bottom pt-3">
            <div class="col-4"><?php echo $item["MaNhatKyLoi"] ?> </div>
            <div class="col-4"><?php echo $item["SuCo"] ?></div>
            <div class="col-4"><?php echo $item["ThoiGianLoi"] ?></div>
        </div>
        <?php
                    }
                ?>
    </div>
    <?php
        }else{
            ?>
    <p class="nothing">Trống</p>
    <?php
        }
    ?>
    <h4>
        Các lỗi đã sửa:
    </h4>
    <?php
        if(count($dsNhatKySuaLoi)>0){
            ?>
    <div>
        <div class="row border-bottom mt-3">
            <div class="col-3">
                <h5>Mã</h5>
            </div>
            <div class="col-3">
                <h5>Loại Lỗi</h5>
            </div>
            <div class="col-3">
                <h5>Mô tả</h5>
            </div>
            <div class="col-3">
                <h5>Ngày sửa xong</h5>
            </div>
        </div>
        <?php
            foreach($dsNhatKySuaLoi as $item){
                ?>
        <div class="row border-bottom pt-3">
            <div class="col-3"><?php echo $item["MaNhatKy"] ?> </div>
            <div class="col-3"><?php echo $item["LoaiLoi"] ?></div>
            <div class="col-3"><?php echo $item["moTa"] ?></div>
            <div class="col-3"><?php echo $item["ngaySuaXong"] ?></div>
        </div>
        <?php
            }
        ?>
    </div>
    <?php
        }else {
            echo " <p class='nothing'>Trống</p>";
        }
    ?>
</div>

<style>
.nothing {
    color: #aaa;
}
</style>