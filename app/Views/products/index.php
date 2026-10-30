<!-- app/Views/students/index.php -->
<?php require __DIR__ . '/../../../include/header.php'; ?>
<section class="product-list">
    <h1 class="page__title">Список товаров</h1>
    <p class="page__lead">Сведения загружаются из базы данных.</p>
    <?php if (!$students): ?>
        <p class="product-list__empty">В базе данных пока нет записей.</p>
    <?php else: ?>
        <ul class="product-list__items">
        <?php foreach ($products as $product): ?>
            <li class="product-list__item">
                <a class="product-list__link" href="index.php?action=show&amp;id=<?= (int) $product['id'] ?>">
                    <?= e($product['title']) ?>
                </a>
                <span class="product-list__price"><?= e($product['price']) ?></span>
            </li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>
<?php require __DIR__ . '/../../../include/footer.php'; ?>