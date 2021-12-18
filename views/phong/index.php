<?php
    if(isset($result)){
        if($result["success"]){
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
<div class="container">
    <div class="row text-center">Danh sách máy</div>
    <div class="row mt-5 gx-3 gy-3">
        <?php
            foreach($dsMay as $may){
                ?>
        <div class="col-3 text-center">
            <div class="device-container">
                <h3><?php echo $may["MaMay"] ?> (<?php echo $may["TinhTrang"] ?>)</h3>
                <div class="btn-group">
                    <a href="index.php?controller=phong&action=info&mamay=<?php echo $may["MaMay"] ?>"
                        class="btn btn-primary">Xem chi tiết</a>
                    <a href="index.php?controller=phong&action=report&mamay=<?php echo $may["MaMay"] ?>"
                        class="btn btn-danger">Báo lỗi</a>
                </div>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>
<style>
.device-container {
    background-color: rgba(0, 0, 0, 0.09);
    width: 100%;
    border-radius: 10px;
}

.btn-group {
    margin: 10px
}
</style>