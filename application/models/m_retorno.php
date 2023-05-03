<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_retorno extends CI_Model
{
    public function vendedor()
    {
        $this->db->select('codigo, nome');
        $this->db->where('status', ' ');
        $query = $this->db->get("vendedores");
        
        return $query->result();
    }

    public function material($material)
    {
        $this->db->select('descricao');
        $this->db->where('codMaterial', $material);
        $query = $this->db->get("material");
        return $query->result();
    }

    public function movVendas()
    {
        $this->db->select('LIMIT 100 *');
        $query = $this->db->get("movloja");
        return $query->result();
    }
}
