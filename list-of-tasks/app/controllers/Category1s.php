<?php

class Category1s extends Controller
{
  public function index()
  {
    $user = new Category1();
    $data = $user->findAll();

    $this->view('category1s/index', [
      'category1s' => $data
    ]);
  }

  public function create()
  {
    

    $errors = [];
    $user = new Category1();

    if (count($_POST) > 0) {
      if ($user->validate($_POST)) {
      
      $user->insert($_POST);

      redirect('category1s');
    } 
    else {
      $errors = $user->errors;
  }
    }
    $this->view('category1s/create', [
      'errors' => $errors
    ]);
}

  public function edit($id)
  {
    $user = new Category1();
    $arr['id'] = $id;
    $data = $user->first($arr);

    if (count($_POST) > 0) {

      $user->update($id, $_POST);

      redirect('category1s');
    }

    $this->view('category1s/edit', [
      'row' => $data
    ]);
  }

  public function delete($id)
  {
    $user = new Category1();
    $arr['id'] = $id;
    $data = $user->first($arr);

    if (count($_POST) > 0) {

      $user->delete($id);

      redirect('category1s');
    }

    $this->view('category1s/delete', [
      'row' => $data
    ]);
  }
}