<div class="container ">
    <div class="row text-center">
        <h1>Danh sách phòng máy</h1>
    </div>
    <div class="row mt-5 text-center">
        <?php
            foreach($dsPhong as $phong){
                ?>
        <div class="col-4 gx-3 mt-3 ">
            <a href="index.php?controller=phong&action=index&maphong=<?php echo $phong["MaPhong"]?>"
                class="device device-item"><?php echo $phong["TenPhong"] ?></a>
        </div>
        <?php
            }
        ?>
    </div>
</div>