<?php

class Dashboard extends CI_Controller{
public function index (){
    $this->load->view('templates_administrator/header');
    $this->load->view('templates_administrator/sidebar');
    $this->load->view('templates_administrator/footer');
    $this->load->view('administrator/dashboard');
}

}
