<form action="index.php?controller=phong&action=submitReport&maphong=<?php echo $may[0]["MaPhong"]?>" method="POST">
    <div class="mb-3 mt-5">
        <label for="exampleFormControlInput1" class="form-label">Máy</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="mamay"
            value="<?php echo $may[0]["MaMay"] ?>" readonly>
    </div>
    <div class="mb-3">
        Mô tả lỗi
        <input type="text" id="suco" class="form-control" name="suco" value="dfas">
    </div>
    <input type="submit" value="Gửi" class="btn btn-primary">
</form>