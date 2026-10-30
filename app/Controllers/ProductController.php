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
            $name = trim($_POST['title'] ?? '');
            $email = trim($_POST['price'] ?? '');

            if ($name === '') {
                $errors[] = 'Укажите название товара.';
            }
            if (!filter_var($price, FILTER_VALIDATE_PRICE)) {
                $errors[] = 'Укажите цену продукта.';
            }

            if (!$errors) {
                Product::create($title, $price);
                header('Location: index.php');
                exit;
            }
        }

        require __DIR__ . '/../Views/products/create.php';
    }

    public function statistics(): void
    {
        $products = Student::all();
        $totalProducts = count($products);
        require __DIR__ . '/../Views/products/statistics.php';
    }
}
?>