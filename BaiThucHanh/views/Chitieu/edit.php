<form action="index.php?controller=Chitieu&action=update&id=<?= $row['ID'];?>" method="post">
<h3>Sửa chi tiêu</h3>
    Danh mục: <input type="text" name="danh_muc" value="<?= $row['danh_muc'];?>"> <br>
    Ngày chi: <input type="date" name="ngay_chi" value="<?= $row['ngay_chi'];?>"> <br>
    Số tiền: <input type="text" name="so_tien" value="<?= $row['so_tien'];?>"> <br>
    Ghi chú: <input type="text" name="ghi_chu" value="<?= $row['ghi_chu'];?>"> <br>
    <input type="submit" value="Cập nhật">
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