<?php include "../app/views/partials/header.php" ?>

<div class="wrapper">
    <?php include "../app/views/partials/sidebar.php" ?>
    <div class="container mt-5">
        <form action="" method="POST" class="w-50 mx-auto">
            <h2>Create Product</h2>
            <?php if (!empty($errors)) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">

                    <?php foreach ($errors as $error) : ?>
                        <?= $error . "<br>" ?>
                    <?php endforeach; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php endif; ?>
            <div class="mb-2">
                <label for="">Product Name</label>
                <input type="text" name="product_name" value="<?=get_var('product_name')?>" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Inventory</label>
                <input type="text" name="inventory" value="<?=get_var('inventory')?>" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Create</button>
        </form>
    </div>
</div>

<?php include "../app/views/partials/footer.php" ?>