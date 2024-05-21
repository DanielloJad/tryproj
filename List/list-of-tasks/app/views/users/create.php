<?php include "../app/views/partials/header.php" ?>

<div class="wrapper">
  <?php include "../app/views/partials/sidebar.php" ?>
  <div class="container mt-5">

    <form action="" method="POST" class="w-50 mx-auto">
      <h2>Create User</h2>

      <?php if (!empty($errors)) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">

          <?php foreach ($errors as $error) : ?>
            <?= $error . "<br>" ?>
          <?php endforeach; ?> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

      <?php endif; ?>

      <div class="mb-2">
        <label for="">Role</label>
        <select name="role" class="form-control">
          <option value="">Choose a Role</option>
          <option <?= get_select('role', 'Admin') ?> value="Admin">Admin</option>
          <option <?= get_select('role', 'User') ?> value="User">User</option>
        </select>
      </div>
      <div class="mb-2">
        <label for="">First Name</label>
        <input type="text" name="firstname" class="form-control" value="<?=get_var('firstname')?>">
      </div>
      <div class="mb-2">
        <label for="">Last Name</label>
        <input type="text" name="lastname" class="form-control" value="<?=get_var('lastname')?>">
      </div>
      <div class="mb-2">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" value="<?=get_var('email')?>">
      </div>
      <div class="mb-2">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control" value="<?=get_var('password')?>"s>
      </div>

      <button class="btn btn-primary" type="submit">Create</button>
    </form>

  </div>
</div>

<?php include "../app/views/partials/footer.php" ?>