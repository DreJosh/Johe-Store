<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendas extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_retorno');
        $retorno['vendedor'] = $this->M_retorno->vendedor();

        ////////////////////////////////////////////////////////////////////////////////////////
        /////// RETORNAR TODOS OS TIPOS DE DOCUMENTOS                                    ///////
        ////////////////////////////////////////////////////////////////////////////////////////
        $this->load->view('Includes/v_header');
        $this->load->view('v_CadVendas', $retorno);
        $this->load->view('Includes/v_footer');
    }

    public function material()
    {
        $material = $this->input->post('material');
        $this->load->model('M_retorno');
        $retorno = $this->M_retorno->material($material);
        echo json_encode($retorno);
    }

    public function movVendas()
    {
        $this->load->model('M_retorno');
        $retorno = $this->M_retorno->movVendas();
        echo json_encode($retorno);
    }

    public function cadasVendas()
    {
        $cadastro = $this->input->post();
        $this->load->model('M_insert');
        $retorno = $this->M_insert->cadasVendas($cadastro);
        echo $retorno;
    }
}
