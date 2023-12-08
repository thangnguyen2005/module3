<?php
// Kết nối với cơ sở dữ liệu
require_once 'db.php';

// Xử lý yêu cầu từ người dùng
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Chitieu';

switch ($controller) {
    case 'Chitieu':
        require_once 'controllers/ChitieuController.php';
        $objController = new ChitieuController();
        break;
    default:
        # code...
        break;
}

switch ($action) {
    case 'index':
        $objController->index();
        break;
    case 'create':
        $objController->create();
        break;
    case 'store':
        $objController->store();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'update':
        $objController->update();
        break;
    case 'show':
        $objController->show();
        break;
    case 'destroy':
        $objController->destroy();
        break;
    default:
        # code...
        break;
}