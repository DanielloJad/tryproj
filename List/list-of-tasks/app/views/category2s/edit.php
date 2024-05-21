<?php include "../app/views/partials/header.php" ?>


<div class="wrapper">
    <?php include "../app/views/partials/sidebar.php" ?>

    <div class="container mt-5">
        <form action="" method="POST" class="w-50 mx-auto">
            <h2>Edit Category</h2>

            <div class="mb-2">
                <label for="">Product Name</label>
                <input type="text" name="product_name" value="<?= $row->product_name ?>" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Inventory</label>
                <input type="text" name="inventory" value="<?= $row->inventory ?>" class="form-control">
            </div>

            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
</div>

<?php include "../app/views/partials/footer.php" ?>