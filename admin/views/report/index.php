<div class="container">
    <div class="row border-bottom">
        <div class="col-12">

            <h5>Danh sách các lỗi được báo cáo</h5>
        </div>
    </div>
    <div class="row border-bottom">
        <div class="col-3">Mã nhật ký</div>
        <div class="col-3">Sự cố gặp phải</div>
        <div class="col-3">Thời gian</div>
        <div class="col-3">Mã máy</div>
    </div>
    <?php
        foreach($dsBaoCao as $baoCao){
            ?>
    <div class="row border-bottom">
        <div class="col-3"><?php echo $baoCao["MaNhatKyLoi"] ?></div>
        <div class="col-3"><?php echo $baoCao["SuCo"] ?></div>
        <div class="col-3"><?php echo $baoCao["ThoiGianLoi"] ?></div>
        <div class="col-3"><a
                href="index.php?controller=may&action=detail&mamay=<?php echo $baoCao["MaMay"] ?>"><?php echo $baoCao["MaMay"] ?></a>
        </div>
    </div>
    <?php
        }
    ?>
</div>