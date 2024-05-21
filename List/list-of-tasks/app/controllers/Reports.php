<?php

class Reports extends Controller
{
  public function index() 
  {
    $report = new Report();
    $data = $report->findAll();

    $this->view('reports/index', [
      'reports' => $data
    ]);
  }
}