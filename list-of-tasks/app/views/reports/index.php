<?php include "../app/views/partials/header.php" ?>

  <div class="wrapper">
      <?php include "../app/views/partials/sidebar.php" ?>
      <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Reports</h2>
        </div>

        <table class="table table-striped mt-3">
          <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Category Name</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Action</th>
          </tr>
          <?php foreach ($sales as $row) { ?>
            <tr>
              <td>
                <?= $row->id ?>
              </td>
              <td>
                <?= $row->date ?>
              </td>
              <td>
                <?= $row->category_name ?>
              </td>
              <td>
                <?= $row->product_name ?>
              </td>
              <td>
                <?= $row->price ?>
              </td>
              <td>
                <?= $row->quantity ?>
              </td>
              <td>
                <?= $row->total_price ?>
              </td>
              <td>
                <a href="<?= ROOT ?>/sales/edit/<?= $row->id ?>" class="btn btn-success btn-sm">Edit</a>
                <a href="<?= ROOT ?>/sales/delete/<?= $row->id ?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>
  </div>

<?php include "../app/views/partials/footer.php" ?>
