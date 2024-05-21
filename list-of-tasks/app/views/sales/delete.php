<?php include "../app/views/partials/header.php" ?>

<div class="wrapper">
    <?php include "../app/views/partials/sidebar.php" ?>
    <div class="container mt-5">
        <form action="" method="POST" class="w-50 mx-auto">
            <h2>Delete Record</h2>
            <div class="mb-2">
                <label for="">Product Name</label>
                <input type="text" name="category_name" disabled value="<?= $row->category_name ?>" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Product Name</label>
                <input type="text" name="product_name" disabled value="<?= $row->product_name ?>" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Price</label>
                <input type="text" name="price" disabled value="<?= $row->price ?>" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Quantity</label>
                <input type="text" name="quantity" disabled value="<?= $row->quantity ?>" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Total Price</label>
                <input type="text" name="total_price" disabled value="<?= $row->total_price ?>" class="form-control">
            </div>

            <input type="hidden" name="id" value="<?= $row->id ?>">
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
</div>
<?php include "../app/views/partials/footer.php" ?>