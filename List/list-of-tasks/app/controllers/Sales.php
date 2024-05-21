<?php

class Sales extends Controller
{
  public function index()
  {
    $user = new Sale();
    $data = $user->findAll();

    $this->view('sales/index', [
      'sales' => $data
    ]);
  }

  public function create()
  {
    $user = new Sale();

    if (count($_POST) > 0) {


      $user->insert($_POST);

      redirect('sales');
    }


    $this->view('sales/create');
  }

  public function edit($id)
  {
    $user = new Sale();
    $arr['id'] = $id;
    $data = $user->first($arr);

    if (count($_POST) > 0) {

      $user->update($id, $_POST);

      redirect('sales');
    }

    $this->view('sales/edit', [
      'row' => $data
    ]);
  }

  public function delete($id)
  {
    $user = new Sale();
    $arr['id'] = $id;
    $data = $user->first($arr);

    if (count($_POST) > 0) {

      $user->delete($id);

      redirect('sales');
    }

    $this->view('sales/delete', [
      'row' => $data
    ]);
  }
}