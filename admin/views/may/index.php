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
                        $active="btn-secondary";
                        if(isset($mamay)&&$maMay=$item["MaMay"]){
                            $active="btn-info";
                        }
                        ?>
                <li class="list-group-item">
                    <a class="btn <?php echo $active ?> d-block"
                        href="index.php?controller=may&action=detail&mamay=<?php echo $item["MaMay"] ?>&maphong=<?php echo $item["MaPhong"] ?>"><?php echo $item["MaMay"] ?></a>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
        <div class="col-9 main-content">
            <h3 class="text-secondary text-center border-bottom">Thông tin máy</h3>
            <?php
                if(isset($mamay)){
                    ?>
            <h5>Mã máy: <?php echo $may[0]["MaMay"] ?></h5>
            <div>
                <h5 class="border-bottom">Danh sách các lỗi đã xử lý</h5>
                <div>
                    <label for="toggle-modal" class="btn btn-success" id="btn-add">Thêm Lỗi đã xử lý</label>
                    <input type="checkbox" id="toggle-modal">
                    <div class="modal" tabindex="1">
                        <form class="modal-dialog" method="post" action="index.php?controller=may&action=add">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Thêm mới danh sách lỗi đã xử lý</h5>
                                    <label type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        for="toggle-modal"></label>
                                </div>
                                <div class="modal-body">
                                    Loại lỗi<input type="text" name="loailoi" class="form-control required" required>
                                    Mô tả <input type="text" name="mota" class="form-control" required>
                                    Ngày sửa xong <input type="datetime-local" name="ngaysuaxong" class="form-control"
                                        required>
                                </div>
                                <div class="modal-footer">
                                    <label type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        for="toggle-modal">Close</label>
                                    <input type="submit" class="btn btn-primary" value="Thêm mới">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row border-bottom mt-3">
                <div class="col-1">Mã</div>
                <div class="col-3">Loại lỗi</div>
                <div class="col-3">Mô tả</div>
                <div class="col-2">Ngày sửa xong</div>
                <div class="col-3">
                    Sửa/xóa
                </div>
            </div>
            <?php
                foreach($dsSuaLoi as $NhatKy){
                    $deleteId="delete".$NhatKy["MaNhatKy"];
                    $updateId="update".$NhatKy["MaNhatKy"];
                    $deleteControl="index.php?controller=may&action=deleteNKS&manks=".$NhatKy["MaNhatKy"];
                    $updateControl="index.php?controller=may&action=updateNKS";
                    ?>
            <div class="row border-bottom align-items-center">
                <div class="col-1"><?php echo $NhatKy["MaNhatKy"] ?></div>
                <div class="col-3"><?php echo $NhatKy["LoaiLoi"] ?></div>
                <div class="col-3"><?php echo $NhatKy["moTa"] ?></div>
                <div class="col-2"><?php echo $NhatKy["ngaySuaXong"] ?></div>
                <div class="col-3">
                    <label for="<?php echo $updateId ?>" class="btn btn-primary">Sửa</label>
                    <label for="<?php echo $deleteId ?>" class="btn btn-danger">Xóa</label>
                    <input type="checkbox" id="<?php echo $deleteId ?>">
                    <input type="checkbox" id="<?php echo $updateId ?>">
                    <?php include "./pages/deleteDialog.php" ?>
                    <?php include './pages/updateNhatKySua.php' ?>
                </div>
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

.main-content {
    position: relative;
}

#toggle-modal:checked~.modal {
    display: block;
}

#toggle-modal {
    display: none;
}
</style>