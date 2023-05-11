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
        $query = $this->db->get("movloja")->result();

        $saldo = $query[0]->Saldo;

        foreach ($query as $linha) {
            if ($linha->tpdov == 2) {
                $saldo -= $linha->qtdeMov;
            } else {
                $saldo += $linha->qtdeMov;
            }
        }
        $saldo -= $cadastro['qtde'];
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

    public function cadastVendedor($input)
    {
        $data = [
            'nome' => $input['vendedor'],
            'email' => $input['email'],
            'dtcria' => date('Y-m-d'),
            'telefone' => $input['tel'],
            'cargo' => $input['cargo']

        ];
        $this->db->insert('funcionarios', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
