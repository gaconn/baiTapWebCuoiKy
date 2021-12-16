<div class="delete">
    <label for="<?php echo $deleteId ?>" class="delete-base"></label>
    <div class="delete-dialog">
        <h3>Xóa dữ liệu</h3>
        <h5 class="delete-message">Bạn có chắc chắn muốn xóa?</h5>
        <div class="choice">
            <label for="<?php echo $deleteId ?>" class="btn btn-secondary">Trở lại</label>
            <a href="<?php echo $deleteControl ?>" class="btn btn-danger">Chắc chắn</a>
        </div>
    </div>
</div>

<style>
.delete {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: none;
}

.delete-message {
    margin-top: 20px;
}

.choice {
    margin-top: 40px;
    display: flex;
    justify-content: center;
}

.delete-base {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.3);
}

.delete-dialog {
    position: absolute;
    width: 400px;
    height: 200px;
    background: white;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 10px;
    text-align: center;
}

#<?php echo $deleteId ?>:checked~.delete {
    display: block;
}

#<?php echo $deleteId ?> {
    display: none;
}
</style>