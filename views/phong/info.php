<?php
    if(count($dsNhatKySua)>0){
        ?>
<div class="container">
    <div class="row">
        <h3 class="col-12 text-center">Các lỗi đã xử lý</h3>
    </div>
    <div class="row text-center mt-5">
        <div class="col-3 text-center">
            Loai lỗi
        </div>
        <div class="col-3 text-center">
            Tình trạng sửa
        </div>
        <div class="col-3 text-center">
            Mô tả lỗi
        </div>
        <div class="col-3 text-center">
            Ngày sửa xong
        </div>
    </div>
    <?php
        foreach($dsNhatKySua as $item){
            ?>
    <div class="row text-center error-item">
        <div class="col-3 text-center">
            <?php echo $item["LoaiLoi"] ?>
        </div>
        <div class="col-3 text-center">
            <?php echo $item["TinhTrangSua"] ?>
        </div>
        <div class="col-3 text-center">
            <?php echo $item["moTa"] ?>
        </div>
        <div class="col-3 text-center">
            <?php echo $item["ngaySuaXong"] ?>
        </div>
    </div>
    <?php
        }
    ?>
</div>
<?php
    }else{
        ?>
<div class="empty">
    <img src="./resources/img/bankrupt.png" alt="">
    <h4>Không có lỗi nào sửa trên máy này</h4>
</div>
<?php
    }
?>
<div class="row mt-5">
    <h3 class="col-12 text-center">Các lỗi được báo cáo</h3>
</div>
<?php

    if(count($dsNhatKyLoi)>0){
        ?>
<div class="container mt-5">

    <div class="row text-center mt-5">
        <div class="col-4 text-center">
            Mã
        </div>
        <div class="col-4 text-center">
            Sự cố
        </div>
        <div class="col-4 text-center">
            Ngày gặp sự cố
        </div>
    </div>
    <?php
        foreach($dsNhatKyLoi as $item){
            ?>
    <div class="row text-center error-item">
        <div class="col-4 text-center">
            <?php echo $item["MaNhatKyLoi"] ?>
        </div>
        <div class="col-4 text-center">
            <?php echo $item["SuCo"] ?>
        </div>
        <div class="col-4 text-center">
            <?php echo $item["ThoiGianLoi"] ?>
        </div>
    </div>
    <?php
        }
    ?>
</div>
<?php
    }else{
        ?>
<div class="empty">
    <h4>Không có lỗi nào được báo cáo trên máy này</h4>
</div>
<?php
    }
?>

<style>
.col-3,
.col-4 {
    border: 1px solid #999;
}

.empty {
    position: relative;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    text-align: center;
    color: #aaa;
}
</style>