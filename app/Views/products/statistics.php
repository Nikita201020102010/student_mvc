<!-- app/Views/products/statistics.php -->
<?php require __DIR__ . '/../../../include/header.php'; ?>
<section class="product-stats">
    <h1 class="page__title">Статистика товаров</h1>
    <p class="page__lead">Краткая сводка по записям в базе данных.</p>
    <div class="product-stats__grid">
        <article class="product-stats__item product-stats__item--highlight">
            <h2 class="product-stats__label">Всего товаров</h2>
            <p class="product-stats__value"><?= (int) $totalProducts ?></p>
        </article>
    </div>
    <a class="button button--secondary" href="index.php?action=products">Назад к списку</a>
</section>
<?php require __DIR__ . '/../../../include/footer.php'; ?>