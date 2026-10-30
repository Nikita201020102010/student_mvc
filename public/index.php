<?php
require_once __DIR__ . '/../include/functions.php';
require_once __DIR__ . '/../app/Controllers/StudentController.php';
require_once __DIR__ . '/../app/Controllers/ProductController.php';

$studentController = new StudentController();
$productController = new ProductController();
$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $studentController->index();
        break;
    case 'show':
        $studentController->show();
        break;
    case 'create':
        $studentController->create();
        break;
    case 'statistics':
        $studentController->statistics();
        break;
    case 'products':
        $productController->index();
        break;
    case 'product':
        $productController->show();
        break;
    case 'product-create':
        $productController->create();
        break;
    case 'product-statistics':
        $productController->statistics();
        break;
    default:
        http_response_code(404);
        echo 'Страница не найдена';
        break;
}
?>