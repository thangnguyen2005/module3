<?php
require_once 'models/Chitieu.php';
class ChitieuController {
    // Hien thi danh sach records => table
    public function index(){
        $items = Chitieu::all();
        // Truyen data xuong view
        require_once 'views/Chitieu/index.php';
       
    }
    // Hien thi form them moi
    public function create(){
        require_once 'views/Chitieu/create.php';
    }
    // Xu ly them moi
    public function store(){
        // Goi model
        Chitieu::store($_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=Chitieu&action=index");
    }
    // Hien thi form chinh sua
    public function edit(){
        $id = $_GET['id'];
        $row = Chitieu::find($id);
        // Truyen xuong view
        require_once 'views/Chitieu/edit.php';
    }
    // Xu ly chinh sua
    public function update(){
        $id = $_GET['id'];
        Chitieu::update( $id, $_POST );
        // Chuyen huong ve trang danh sach
        header("Location: index.php?action=index&controller=Chitieu");
    }

    // Xoa
    public function destroy(){
        $id = $_GET['id'];
        Chitieu::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=Chitieu&action=index");
    }
    // Xem chi tiet
    public function show(){
        $id = $_GET['id'];
        $row = Chitieu::find($id);

        // Truyen xuong view
        require_once 'views/Chitieu/show.php';
    }
}