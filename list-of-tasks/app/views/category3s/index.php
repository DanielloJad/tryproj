<?php include "../app/views/partials/header.php" ?>

  <div class="wrapper">
      <?php include "../app/views/partials/sidebar.php" ?>
      <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
          <h2>List of Category 3</h2>
          <a href="<?= ROOT ?>/category3s/create" class="btn btn-primary">Add New</a>
        </div>

        <table class="table table-striped mt-3">
          <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Inventory</th>
            <th>Action</th>
          </tr>
          <?php foreach ($category3s as $row) { ?>
            <tr>
              <td>
                <?= $row->id ?>
              </td>
              <td>
                <?= $row->product_name ?>
              </td>
              <td>
                <?= $row->inventory ?>
              </td>
              <td>
                <a href="<?= ROOT ?>/category3s/edit/<?= $row->id ?>" class="btn btn-success btn-sm">Edit</a>
                <a href="<?= ROOT ?>/category3s/delete/<?= $row->id ?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>
  </div>

<?php include "../app/views/partials/footer.php" ?>
