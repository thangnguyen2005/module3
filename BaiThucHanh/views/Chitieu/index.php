<table border="1">

            <h3>Danh sách chi tiêu</h3>
       
    <tr>
        <td colspan="8">
            <button onclick="location.href='index.php?action=create&controller=Chitieu'" class="btn btn-outline-success">Thêm Mới</button>
        </td>
    </tr>
    <tr>
        <th>Danh mục</th>
        <th>Ngày chi</th>
        <th>Số tiền</th>
        <th>Ghi chú</th>
        <th>Hành động</th>
    </tr>

    <!-- Bắt đầu lặp -->
    <?php
    $totalExpense = 0; // Bien luu tong chi tieu
    foreach ($items as $r) :
        $totalExpense += $r['so_tien']; // Cong them gia tri chi tieu vao tong
    ?>
        <tr>
            <td><?php echo $r['danh_muc']; ?> </td>
            <td><?php echo $r['ngay_chi']; ?> </td>
            <td><?php echo number_format($r['so_tien']) ?> </td>
            <td><?php echo $r['ghi_chu']; ?> </td>
            <td>
                <button onclick="location.href='index.php?controller=Chitieu&action=edit&id=<?php echo $r['ID']; ?>'" class="btn btn-outline-info">Sửa</button>
                <button onclick="location.href='index.php?controller=Chitieu&action=show&id=<?php echo $r['ID']; ?>'" class="btn btn-outline-warning">Xem</button>
                <button onclick="if(confirm('Bạn chắc chắn chưa ?')){ location.href='index.php?controller=Chitieu&action=destroy&id=<?php echo $r['ID']; ?>' }" class="btn btn-outline-danger">Xóa</button>
            </td>
        </tr>
        
    <?php endforeach; ?>
    <tr>
            <td colspan="4" align="right">Tổng chi tiêu:</td>
            <td><?php echo number_format($totalExpense) ?></td>
        </tr>
        <style>
            table {
    border-collapse: collapse;
    width: 100%;
}

table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

button {
    padding: 5px 10px;
    margin: 2px;
    cursor: pointer;
}

.btn-outline-success {
    background-color: #28a745;
    color: white;
    border: 1px solid #28a745;
}

.btn-outline-success:hover {
    background-color: #218838;
}

.btn-outline-info {
    background-color: #17a2b8;
    color: white;
    border: 1px solid #17a2b8;
}

.btn-outline-info:hover {
    background-color: #138496;
}

.btn-outline-warning {
    background-color: #ffc107;
    color: white;
    border: 1px solid #ffc107;
}

.btn-outline-warning:hover {
    background-color: #e0a800;
}

.btn-outline-danger {
    background-color: #dc3545;
    color: white;
    border: 1px solid #dc3545;
}

.btn-outline-danger:hover {
    background-color: #c82333;
}

        </style>