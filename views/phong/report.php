<form action="index.php?controller=phong&action=submitReport" method="post">
    <div class="mb-3 mt-5">
        <label for="exampleFormControlInput1" class="form-label">Máy</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="mamay"
            value="<?php echo $may[0]["MaMay"] ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mô tả lỗi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
    </div>
    <input type="submit" value="Gửi" class="btn btn-primary">
</form>