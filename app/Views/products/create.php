<!-- app/Views/products/create.php -->
<?php require __DIR__ . '/../../../include/header.php'; ?>
<section class="product-form">
    <h1 class="page__title">Добавить товар</h1>
    <?php foreach ($errors as $error): ?>
        <p class="alert alert--error"><?= e($error) ?></p>
    <?php endforeach; ?>
    <form class="product-form__form" action="index.php?action=product-create" method="post">
        <label class="product-form__field">
            <span class="product-form__label">Название товара</span>
            <input class="product-form__input" type="text" name="title" value="<?= e($title) ?>" required>
        </label>
        <label class="product-form__field">
            <span class="product-form__label">Цена</span>
            <input class="product-form__input" type="number" name="price" min="0" step="0.01" value="<?= e($price) ?>" required>
        </label>
        <button class="button button--primary" type="submit">Сохранить</button>
    </form>
</section>
<?php require __DIR__ . '/../../../include/footer.php'; ?>