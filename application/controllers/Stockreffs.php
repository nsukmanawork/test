<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stockreffs extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('stockreffs_model');
    $this->load->helper('url_helper');
  }

	public function index()
	{
    $data['stockreffs'] = $this->stockreffs_model->get_stockreff();
		$this->load->view("templates/header");
		$this->load->view("master/stockreff/index", $data);
		$this->load->view("templates/footer");
	}

  public function view($id = null)
	{
    $data['stockreff_detail'] = $this->stockreffs_model->get_stockreff($id);
		$this->load->view("templates/header");
		$this->load->view("master/stockreff/detail", $data);
		$this->load->view("templates/footer");
	}

  public function add()
	{
    $this->load->helper('form');
    $this->load->library('form_validation');
    // var_dump($this->input->post());

    $this->form_validation->set_rules('reffno', 'Reff No', 'required|is_unique[tbl_stock_reffno.reffno]');
    $this->form_validation->set_rules('usestatus', 'use status', 'required');

    $data = array(
      'reffno' => $this->input->post('reffno'),
      'usestatus' => $this->input->post('usestatus')
    );

    if ($this->form_validation->run() === FALSE) {
      $this->load->view("templates/header");
  		$this->load->view("master/stockreff/add", $data);
  		$this->load->view("templates/footer");
    }else {
      $this->stockreffs_model->set_stockreffs();
      redirect('stockreffs');
    }

  }

  public function update($id)
	{
    $this->load->helper('form');
    $this->load->library('form_validation');
    // var_dump($this->input->post());

    $this->form_validation->set_rules('usestatus', 'Use status', 'required');

    $data['set_val'] = array(
      'usestatus' => $this->input->post('usestatus')
    );

    if ($this->form_validation->run() === FALSE) {
      $data['stockreffs'] =$this->stockreffs_model->get_stockreff($id);
      $this->load->view("templates/header");
  		$this->load->view("master/stockreff/update", $data);
  		$this->load->view("templates/footer");
    }else {
      $this->stockreffs_model->update_stockreffs($id);
      redirect('stockreffs');
    }

  }


}
