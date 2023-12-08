<form action="index.php?controller=Chitieu&action=store" method="post">
<h3>Thêm chi tiêu</h3>
    Danh mục : <input type="text" name="danh_muc"> <br>
    Ngày chi : <input type="date" id="ngay_chi" name="ngay_chi" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" required><br>
    Số tiền : <input type="text" name="so_tien"> <br>
    Ghi chú : <input type="text" name="ghi_chu"> <br>
    <input type="submit" value="Thêm">
</form>
<style>
    form {
    max-width: 400px;
    margin: 0 auto;
}

h3 {
    text-align: center;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}


</style>