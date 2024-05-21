<?php

class Category3s extends Controller
{
  public function index()
  {
    $user = new Category3();
    $data = $user->findAll();

    $this->view('category3s/index', [
      'category3s' => $data
    ]);
  }

  public function create()
  {
    $errors = [];
    $user = new Category3();

    if (count($_POST) > 0) {
      if ($user->validate($_POST)) {
      
      $user->insert($_POST);

      redirect('category3s');
    } 
    else {
      $errors = $user->errors;
  }
    }
    $this->view('category3s/create', [
      'errors' => $errors
    ]);
}

  public function edit($id)
  {
    $user = new Category3();
    $arr['id'] = $id;
    $data = $user->first($arr);

    if (count($_POST) > 0) {

      $user->update($id, $_POST);

      redirect('category3s');
    }

    $this->view('category3s/edit', [
      'row' => $data
    ]);
  }

  public function delete($id)
  {
    $user = new Category3();
    $arr['id'] = $id;
    $data = $user->first($arr);

    if (count($_POST) > 0) {

      $user->delete($id);

      redirect('category3s');
    }

    $this->view('category3s/delete', [
      'row' => $data
    ]);
  }
}