<div class="update">
    <label for="<?php echo $updateId ?>" class="update-base"></label>
    <form class="update-dialog" action="<?php echo $updateControl ?>" method="post">
        <h3>Cập nhật dữ liệu</h3>
        <div>
            Mã nhật ký <input type="text" name="manks" readonly value="<?php echo $NhatKy["MaNhatKy"] ?>"
                class="form-control">
            Loại lỗi <input type="text" name="loailoi" value="<?php echo $NhatKy["LoaiLoi"] ?>" class="form-control"
                required>
            Mô tả <input type="text" name="mota" value="<?php echo $NhatKy["moTa"] ?>" class="form-control" required>
            Ngày sửa xong <input type="datetime-local" name="ngaysuaxong"
                value="<?php echo date("Y-m-d\TH:i:s",strtotime($NhatKy["ngaySuaXong"])) ?>" class="form-control"
                required>
        </div>
        <div class="choice">
            <label for="<?php echo $updateId ?>" class="btn btn-secondary">Trở lại</label>
            <input type="submit" class="btn btn-success" value="Cập nhật">
        </div>
    </form>
</div>

<style>
.update {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: none;
}

.update-message {
    margin-top: 20px;
}

.choice {
    margin-top: 40px;
}

.update-base {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.3);
}

.update-dialog {
    position: absolute;
    width: 400px;
    height: fit-content;
    background: white;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 10px;
    padding: 10px;
}

#<?php echo $updateId ?>:checked~.update {
    display: block;
}

#<?php echo $updateId ?> {
    display: none;
}
</style>