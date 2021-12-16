<?php
    if(isset($result)){
        if($result["success"]){
        ?>
<div class="alert alert-success" role="alert"><?php echo $result["message"] ?></div>
<?php
        }else{
            ?>
<div class="alert alert-danger" role="alert"><?php echo $result["message"] ?></div>
<?php
        }
    }
?>

<div class="container mt-5">
    <div>
        <label for="toggle-modal" class="btn btn-success" id="btn-add">Thêm phòng</label>
        <input type="checkbox" id="toggle-modal">
        <div class="modal" tabindex="1">
            <form class="modal-dialog" method="post" action="index.php?controller=phong&action=add">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Thêm một phòng mới</h5>
                        <label type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            for="toggle-modal"></label>
                    </div>
                    <div class="modal-body">
                        Mã phòng<input type="text" name="maPhong" class="form-control required" required>
                        Tên phòng <input type="text" name="tenPhong" class="form-control" required>
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

    <div class="row text-center">
        <h1>Danh sách phòng máy</h1>
    </div>
    <div class="row pt-4 text-center border-bottom">
        <div class="col-2 ">
            <h4>Mã phòng</h4>
        </div>
        <div class="col-6 ">
            <h4>Tên phòng</h4>
        </div>
        <div class="col-4">
            <h4>Sửa/Xóa</h4>
        </div>
    </div>
    <?php
            foreach($dsPhong as $phong){
                $deleteId= "delete".$phong["MaPhong"];
                $deleteControl= "index.php?controller=phong&action=delete&maphong=".$phong["MaPhong"];
                $updateId="update".$phong["MaPhong"];
                $updateControl="index.php?controller=phong&action=update";
                ?>
    <div class="row pt-2 text-center border-bottom">
        <a href="index.php?controller=may&action=info&maphong=<?php echo $phong["MaPhong"] ?>"
            class="col-2 btn btn-info text-white"><?php echo $phong["MaPhong"] ?></a>
        <div class="col-6 ">
            <?php echo $phong["TenPhong"] ?>
        </div>
        <div class="col-4">
            <label for="<?php echo $updateId ?>" class="btn btn-primary">Sửa</label>
            <label for="<?php echo $deleteId ?>" class="btn btn-danger">Xóa</label>
            <input type="checkbox" id="<?php echo $deleteId ?>">
            <input type="checkbox" id="<?php echo $updateId ?>">
            <?php include "./pages/deleteDialog.php" ?>
            <?php include './pages/updatePhong.php' ?>
        </div>
    </div>
    <?php
            }
        ?>
</div>

<style>
#toggle-modal:checked~.modal {
    display: block;
}

#toggle-modal {
    display: none;
}
</style>