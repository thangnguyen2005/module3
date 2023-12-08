<table border="1">
    <tr>
        <td>Danh mục</td>
        <td><?= $row['danh_muc']; ?></td>
    </tr>
    <tr>
        <td>Ngày chi</td>
        <td><?= $row['ngay_chi']; ?></td>
    </tr>
    <tr>
        <td>Số tiền</td>
        <td><?= $row['so_tien']; ?></td>
    </tr>
    <tr>
        <td>Ghi chú</td>
        <td><?= $row['ghi_chu']; ?></td>
    </tr>
    <tr>
        <td> <button onclick="location.href='index.php'" class="btn btn-outline-secondary">Quay Lại</button>
        </td>
    </tr>
</table>
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

button {
    padding: 10px;
    margin: 10px;
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    cursor: pointer;
}

button:hover {
    background-color: #e0e0e0;
}

</style>