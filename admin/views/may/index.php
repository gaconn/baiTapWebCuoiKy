<?php

 if(isset($result)){
     if($result["success"])
     {
     ?>
<div class="alert alert-success"><?php echo $result["message"] ?></div>
<?php
     }else{
         ?>
<div class="alert alert-danger"><?php echo $result["message"] ?></div>
<?php
     }
 }
    ?>
<div class="container border-top mt-5">

    <div class="row">
        <div class="col-3">
            <div class="list-title">
                <h3 class="text-secondary main-title">Danh sách máy</h3>
                <label for="may-toggle" class="icon-toggle"><img src="resources/image/gear-option.png" alt="Sửa"
                        class="list-img"></label>
                <input type="checkbox" id="may-toggle">
                <div class="may-option">
                    <label for="may-option1" class="label-toggle">
                        Thêm máy mới
                    </label>
                    <label for="may-option2" class="label-toggle">
                        Xóa máy
                    </label>
                    <input type="checkbox" id="may-option1">
                    <input type="checkbox" id="may-option2">
                    <div class="modal modal1" tabindex="1">
                        <form class="modal-dialog" method="post" action="index.php?controller=may&action=addMay">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Thêm máy</h5>
                                    <label type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        for="may-option1"></label>
                                </div>
                                <div class="modal-body">
                                    Mã phòng <input type="text" name="maphong" value="<?php echo $maphong ?>"
                                        class="form-control">
                                    Mã máy<input type="text" name="mamay" class="form-control required" required>
                                </div>
                                <div class="modal-footer">
                                    <label type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        for="may-option1">Close</label>
                                    <input type="submit" class="btn btn-primary" value="Thêm mới">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal modal2" tabindex="1">
                        <form class="modal-dialog" method="post" action="index.php?controller=may&action=deleteMay">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Xóa máy</h5>
                                    <label type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        for="may-option2"></label>
                                </div>
                                <div class="modal-body">
                                    Mã phòng <input type="text" name="maphong" value="<?php echo $maphong ?>"
                                        class="form-control">
                                    Mã máy <select name="mamay" id="">
                                        <?php
                                            foreach($dsMay as $item){
                                                ?>
                                        <option value="<?php echo $item["MaMay"] ?>"> <?php echo $item["MaMay"] ?>
                                        </option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <label type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                        for="may-option2">Close</label>
                                    <input type="submit" class="btn btn-danger" value="Xóa">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <ul class="list-group">
                <?php
                    foreach($dsMay as $item){
                        $active="btn-secondary";
                        if(isset($mamay)&&$mamay==$item["MaMay"]){
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
                if(isset($may)){
                    ?>
            <h5>Mã máy: <?php echo $may[0]["MaMay"] ?></h5>
            <h5>Mã phòng: <?php echo $may[0]["MaPhong"] ?></h5>
            <div>
                <h5 class="border-bottom">Danh sách các lỗi đã xử lý</h5>
                <div>
                    <label for="toggle-modal" class="btn btn-success" id="btn-add">Thêm Lỗi đã xử lý</label>
                    <input type="checkbox" id="toggle-modal">
                    <div class="modal" tabindex="1">
                        <form class="modal-dialog" method="post"
                            action="index.php?controller=may&action=add&mamay=<?php echo $may[0]["MaMay"] ?>&maphong=<?php echo $may[0]["MaPhong"] ?>">
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
                    $deleteControl="index.php?controller=may&action=deleteNKS&manks=".$NhatKy["MaNhatKy"]."&mamay=".$mamay."&maphong=".$maphong;
                    $updateControl="index.php?controller=may&action=updateNKS"."&mamay=".$mamay."&maphong=".$maphong;
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
            <div class="mt-3">
                <h5 class="border-bottom">Danh sách các lỗi được báo cáo</h5>
            </div>
            <div>
                <div class="row border-bottom mt-3">
                    <div class="col-3">Mã</div>
                    <div class="col-6">Sự cố</div>
                    <div class="col-3">Ngày sửa xong</div>
                </div>
                <?php
                if(isset($dsBaoCao))
                foreach($dsBaoCao as $loi){
                    ?>
                <div class="row border-bottom align-items-center">
                    <div class="col-3"><?php echo $loi["MaNhatKyLoi"] ?></div>
                    <div class="col-6"><?php echo $loi["SuCo"] ?></div>
                    <div class="col-3"><?php echo $loi["ThoiGianLoi"] ?></div>
                </div>
                <?php
                    }
                ?>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
<?php

?>
<style>
.list-title {
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

.label-toggle {
    display: block;
}

.main-title {
    display: inline-block;
}

.icon-toggle {
    display: inline-block;
    cursor: pointer;
}

.may-option {
    background: #ccc;
    display: none;
}

#may-toggle:checked~.may-option {
    display: block;
    transform-origin: 50% top;
    animation: slideIn 0.1s linear;
}

@keyframes slideIn {
    from {
        transform: scaleY(0);
    }

    to {
        transform: scaleY(1);
    }
}

.label-toggle {
    font-size: 1.2rem;
    padding: 2px 10px;
    border-bottom: 1px solid #fff;
    cursor: pointer;
}

.label-toggle:hover {
    background: orange;
    color: white;
}

#may-toggle,
#may-option1,
#may-option2 {
    display: none;
}

#may-option1:checked~.modal1 {
    display: block;
}

#may-option2:checked~.modal2 {
    display: block;
}
</style>