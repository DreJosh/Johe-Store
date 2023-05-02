<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_retorno extends CI_Model
{
    public function vendedor()
    {
        $this->db->select('codigo, nome');
        $query = $this->db->get("vendedores");
        return $query->result();
    }
}
