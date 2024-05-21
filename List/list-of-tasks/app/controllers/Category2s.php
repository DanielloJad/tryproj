<?php

class Category2s extends Controller
{
  public function index()
  {
    $user = new Category2();
    $data = $user->findAll();

    $this->view('category2s/index', [
      'category2s' => $data
    ]);
  }

  public function create()
  {
    $user = new Category2();

    if (count($_POST) > 0) {


      $user->insert($_POST);

      redirect('category2s');
    }


    $this->view('category2s/create');
  }

  public function edit($id)
  {
    $user = new Category2();
    $arr['id'] = $id;
    $data = $user->first($arr);

    if (count($_POST) > 0) {

      $user->update($id, $_POST);

      redirect('category2s');
    }

    $this->view('category2s/edit', [
      'row' => $data
    ]);
  }

  public function delete($id)
  {
    $user = new Category2();
    $arr['id'] = $id;
    $data = $user->first($arr);

    if (count($_POST) > 0) {

      $user->delete($id);

      redirect('category2s');
    }

    $this->view('category2s/delete', [
      'row' => $data
    ]);
  }
}