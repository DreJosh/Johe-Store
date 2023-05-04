<?php
defined('BASEPATH') or exit('No direct script access allowed');

class consulVendas extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_retorno');
        $retorno['vendedor'] = $this->M_retorno->vendedor();

        ////////////////////////////////////////////////////////////////////////////////////////
        /////// RETORNAR TODOS OS TIPOS DE DOCUMENTOS                                    ///////
        ////////////////////////////////////////////////////////////////////////////////////////
        $this->load->view('Includes/v_header');
        $this->load->view('v_consulVendas');
        $this->load->view('Includes/v_footer');
    }
}