<?php include "../app/views/partials/header.php" ?>

<div class="wrapper">
    <?php include "../app/views/partials/sidebar.php" ?>

    <div class="container mt-5">
        <form action="" method="POST" class="w-50 mx-auto">
            <h2>Edit Record</h2>

            <!-- <script>
                function getDate() {
                    var date = document.getElementById("get_date").value;

                        document.getElementById("display_date").value;
                    
                }
            </script> -->

            <div class="mb-2">
                <label for="">Date</label>
                <input type="date"  name="date" id="display_date" value="<?= $row->$date?>" class="form-control">
            </div>
            
            <div class="mb-2">
                <label for="">Product Name</label>
                <input type="text" name="category_name" value="<?= $row->category_name ?>" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Product Name</label>
                <input type="text" name="product_name" value="<?= $row->product_name ?>" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Price</label>
                <input type="number" name="price" id="price" onkeyup="myFunction()" value="<?= $row->price ?>" class="form-control">
            </div>
            <div class="mb-2">
                <label for="">Quantity</label>
                <input type="number" name="quantity" id="quantity" onkeyup="myFunction()" value="<?= $row->quantity ?>" class="form-control">
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
                <input type="text" name="total_price" id="display" readonly value="<?= $row->total_price ?>" class="form-control">
            </div>

            <button class="btn btn-primary" type="submit">Update</button>
        </form>
    </div>
</div>

<?php include "../app/views/partials/footer.php" ?>