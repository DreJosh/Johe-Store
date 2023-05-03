<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_insert extends CI_Model
{
    public function cadasVendas($cadastro)
    {
        $saldo = 0;
        $this->db->select('tpdov, Saldo, qtdeMov');
        $this->db->where('Produto', $cadastro['produto']);
        $query = $this->db->get("movloja");
        var_dump($query);
        exit();
        $saldo = $query['Saldo'];

        foreach ($query->result() as $linha) {
            if ($linha->tpdov == 1) {
                $saldo -= $linha->qtdeMov;
            }
        }
        $saldo = $saldo - $cadastro['qtde'];
        $data = [
            'produto' => $cadastro['produto'],
            'dtmov' => $cadastro['dtMov'],
            'tpdov' => 2,
            'func' => $cadastro['vendedor'],
            'cliente' => $cadastro['cliente'],
            'dtcria' => date('Y-m-d h-i-s'),
            'saldo' => $saldo,
            'qtdeMov' => $cadastro['qtde'],
            'meioVenda' => $cadastro['meio']
        ];
        $this->db->insert('movloja', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
