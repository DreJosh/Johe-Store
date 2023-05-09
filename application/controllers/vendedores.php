<?php
defined('BASEPATH') or exit('No direct script access allowed');

class vendedores extends CI_Controller
{
    public function index()
    {
        // $this->load->model('M_retorno');
        ////////////////////////////////////////////////////////////////////////////////////////
        /////// RETORNAR TODOS OS TIPOS DE DOCUMENTOS                                    ///////
        ////////////////////////////////////////////////////////////////////////////////////////
        $this->load->view('Includes/v_header');
        $this->load->view('v_vendedores');
        $this->load->view('Includes/v_footer');
    }
}
