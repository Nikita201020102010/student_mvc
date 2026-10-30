<?php
require_once __DIR__ . '/../Models/Product.php';

class ProductController
{
    public function index(): void
    {
        $products = Product::all();
        require __DIR__ . '/../Views/products/index.php';
    }

    public function show(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $product = $id ? Product::find((int) $id) : null;
        require __DIR__ . '/../Views/products/show.php';
    }

    public function create(): void
    {
        $errors = [];
        $title = '';
        $price = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = trim($_POST['title'] ?? '');
            $price = trim($_POST['price'] ?? '');

            if ($title === '') {
                $errors[] = 'Укажите название товара.';
            }
            if (!is_numeric($price) || (float) $price < 0) {
                $errors[] = 'Укажите корректную цену товара.';
            }

            if (!$errors) {
                Product::create($title, (float) $price);
                header('Location: index.php?action=products');
                exit;
            }
        }

        require __DIR__ . '/../Views/products/create.php';
    }

    public function statistics(): void
    {
        $products = Product::all();
        $totalProducts = count($products);
        require __DIR__ . '/../Views/products/statistics.php';
    }
}
?>