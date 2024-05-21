<?php include "../app/views/partials/header.php" ?>

<?php 
// $sale = new Sale();
// $data = $sale->findAll();

// var_dump($data);

?>

<div class="wrapper">
    <?php include "../app/views/partials/sidebar.php" ?>
    <div class="container mt-5">
        <form action="" method="POST" class="w-50 mx-auto">
            <h2>Create Record</h2>

            <div class="mb-2">
                <label for="">Date</label>
                <input type="date"  name="date" id="get_id" class="form-control">
            </div>

            <div class="mb-2">
                <label for="">Category Name</label>
                <select name="category_name" class="form-control">
                    <option value="">Choose a Category</option>
                    <option <?= get_select('category_name', 'Category 1') ?> value="Category 1">Category 1</option>
                    <option <?= get_select('category_name', 'Category 2') ?> value="Category 2">Category 2</option>
                    <option <?= get_select('category_name', 'Category 3') ?> value="Category 3">Category 3</option>
                </select>
            </div>

            <div class="mb-2">
                <label for="">Product Name</label>
                <select name="product_name" class="form-control">

                    <option value="">Choose a Product</option>
                    <option <?= get_select('product_name', 'Product 1') ?> value="Product 1">Product 1</option>
                    <option <?= get_select('product_name', 'Product 2') ?> value="Product 2">Product 2</option>
                    <option <?= get_select('product_name', 'Product 3') ?> value="Product 3">Product 3</option>
                </select>
            </div>

            <div class="mb-2">
                <label for="">Price</label>
                <input type="number" name="price" id="price" onkeyup="myFunction()" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Quantity</label>
                <input type="number" name="quantity" id="quantity" onkeyup="myFunction()" class="form-control">
            </div>
            <script>
                function myFunction() {
                    var price = document.getElementById("price").value;
                    var quantity = document.getElementById("quantity").value;

                    if (price && quantity) {
                        const total_price = price * quantity;
                        document.getElementById("display").value = total_price;
                    }
                }
            </script>
            <div class="mb-2">

                <label for="">Total Price</label>
                <input type="number" name="total_price" id="display" readonly class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Create</button>
        </form>
    </div>
</div>

<?php include "../app/views/partials/footer.php" ?>