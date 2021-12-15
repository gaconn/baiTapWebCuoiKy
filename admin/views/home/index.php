<div class="container mt-5">
    <div class="row ">
        <div class="col-12">
            <h3>Các phản hồi gần nhất</h3>
        </div>
    </div>
    <div class="row border-bottom mt-3">
        <div class="col-3">
            <h4>Mã</h4>
        </div>
        <div class="col-3">
            <h4>Sự cố</h4>
        </div>
        <div class="col-3">
            <h4>Thời gian lỗi</h4>
        </div>
        <div class="col-3">
            <h4>Mã máy</h4>
        </div>
    </div>
    <?php
        foreach($dsNhatKyLoi as $item){
            ?>
    <div class="row border-bottom pt-2">
        <div class="col-3"><?php echo $item["MaNhatKyLoi"] ?></div>
        <div class="col-3"><?php echo $item["SuCo"] ?></div>
        <div class="col-3"><?php echo $item["ThoiGianLoi"] ?></div>
        <div class="col-3">
            <a
                href="index.php?controller=home&action=reportInfo&mamay=<?php echo $item["MaMay"] ?>"><?php echo $item["MaMay"] ?></a>

        </div>
        <?php
            if($item["ThoiGianLoi"]== date("Y-m-d")){
                echo "<div class='new'></div>";
            }
        ?>
    </div>
    <?php
        }
    ?>
</div>

<style>
.row {
    position: relative;
}

.new {
    width: fit-content;
    height: 30px;
    position: absolute;
    background: url("./resources/image/new.png");
    top: 0;
    right: 0;
}
</style>