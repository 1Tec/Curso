<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function formataDatabr($data=NULL)
{
   if ($data) {
     
      // Separa a data em 3 partes
      $data_funcao = explode("-", $data);
// Retorno a data pronto dia/mes/ano
      return $data_funcao[2] . '/' . $data_funcao[1] . '/' . $data_funcao[0];

   }
}


function formataMoeda($valor=NULL)
{
   if ($valor) {
// retorno o valor R$ 10,00
      return 'R$ ' . number_format($valor, 2, ',', '.');

   }
}