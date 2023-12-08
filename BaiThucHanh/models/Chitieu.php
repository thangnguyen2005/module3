<?php
// Ket noi voi database
class Chitieu
{
    // lay ta ca du lieu
    public static function all()
    {
        global $conn;
        $sql = "SELECT * FROM `Chitieu`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        // Tra ve cho Model
        return $rows;
    }

    // lay chi tiet 1 du lieu
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `Chitieu` WHERE ID = $id";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }

    // Them moi du lieu
    public static function store($data)
    {
        global $conn;
        $danh_muc = $data['danh_muc'];
        $ngay_chi = $data['ngay_chi'];
        $so_tien = $data['so_tien'];
        $ghi_chu = $data['ghi_chu'];

        $sql = "INSERT INTO `Chitieu` 
            ( `danh_muc`, `ngay_chi`, `so_tien`, `ghi_chu` ) 
            VALUES 
            ('$danh_muc', '$ngay_chi', '$so_tien', '$ghi_chu' )";
        //Thuc hien truy van
        $conn->exec($sql);
        // In thông báo và chuyển hướng sau khi thêm
        echo '<div class="success-message">';
        echo 'Thêm thành công';
        echo '</div>';
        echo '<script>';
        echo 'setTimeout(function() {';
        echo '    window.location.href = "http://localhost/BaiThucHanh/index.php?action=index&controller=Chitieu";';
        echo '}, 1000);';
        echo '</script>';
        exit; // Kết thúc kịch bản PHP để ngăn mã HTML tiếp theo từ được thực thi
        return true;
    }

    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $danh_muc = $data['danh_muc'];
        $ngay_chi = $data['ngay_chi'];
        $so_tien = $data['so_tien'];
        $ghi_chu = $data['ghi_chu'];

        $sql = "UPDATE `Chitieu` SET `danh_muc` = '$danh_muc', `ngay_chi` = '$ngay_chi',`so_tien` = '$so_tien',`ghi_chu` = '$ghi_chu'  WHERE `ID` = $id";
        //Thuc hien truy van
        $conn->exec($sql);
        // In thông báo và chuyển hướng sau khi Sửa
        echo '<div class="success-message">';
        echo 'Sửa thành công';
        echo '</div>';
        echo '<script>';
        echo 'setTimeout(function() {';
        echo '    window.location.href = "http://localhost/BaiThucHanh/index.php?action=index&controller=Chitieu";';
        echo '}, 1000);';
        echo '</script>';
        exit; // Kết thúc kịch bản PHP để ngăn mã HTML tiếp theo từ được thực thi
        return true;
    }

    //Xoa du lieu
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM Chitieu WHERE ID = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        // In thông báo và chuyển hướng sau khi Xóa
        echo '<div class="success-message">';
        echo 'Xóa thành công';
        echo '</div>';
        echo '<script>';
        echo 'setTimeout(function() {';
        echo '    window.location.href = "http://localhost/BaiThucHanh/index.php?action=index&controller=Chitieu";';
        echo '}, 1000);';
        echo '</script>';
        exit; // Kết thúc kịch bản PHP để ngăn mã HTML tiếp theo từ được thực thi
        return true;
    }
}
?>
<style>
    .success-message {
        background-color: #dff0d8;
        color: #3c763d;
        padding: 10px;
        border: 1px solid #d6e9c6;
        border-radius: 4px;
        margin-bottom: 10px;
    }
</style>