<?php
defined('BASEPATH') OR exit('No direct script access allowed'); //sicherheit erlaubt keinen anderen rein zu imagedashedline

class ZahnarztAlzenau extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
        //$this->load->model('page');
  }



    public function index()
    {
      //echo 'Hello World';
      $data['title'] = 'Home Page';
      $data['message'] = 'Hello World From The Controller';
      $data['content'] = 'Pages/Home';

      $this->load->view('Layouts/master', $data);
    }



    public function praxis()
    {
      //echo 'Hello World';
      $data['title'] = 'Praxis';
      $data['message'] = 'Hello World From The Controller About';
      $data['content'] = 'Pages/Praxis';
      $this->load->view('Layouts/master', $data);
    }







}
