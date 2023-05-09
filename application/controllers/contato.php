<?php
defined('BASEPATH') or exit('No direct script access allowed');

class contato extends CI_Controller
{
    public function index()
    {
        $this->load->view('Includes/v_header');
        $this->load->view('v_contato');
        $this->load->view('Includes/v_footer');
    }
}
