<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aula extends CI_Controller
{

    public function index($funcao = NULL)
    {
        if ($funcao == 1) {
            $this->listar();
        }

        if ($funcao == 2) {
            $this->adicionar();
        }

        if ($funcao == 3) {
            $this->alterar();
        }

        if ($funcao == NULL) {
            echo 'Voce deve passar uma funcao';
        }
    }

    private function listar()
    {
        echo 'listar';
    }
    public function adicionar()
    {
        echo 'adicionar';
    }

    public function alterar()
    {
        echo 'alterar';
    }
}
