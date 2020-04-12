<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?php echo $titulo ?></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Compartilhar</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendario"></span>
            Calendario
          </button>
        </div>
      </div>
     
     <div class="col-12 col-sm-12">
     <?php
echo anchor('/site/livros', 'Listar Livros', array('title' => 'Listar livros', 'class' => 'btn btn-secondary'));
?>




     
     <table class="table m-topo" >
     <thead>
    <tr>
      <th>#</th>
      <th>Data Cadastro</th>
      <th>Nome do Livro</th>
      <th>Autor</th>
      <th>Preco</th>
      
    </tr>
    </thead>

    <tbody>
<?php



//echo '<pre>';
//print_r($info);

?>

<tr>
  <td><?php echo $info->id ?></td>
  <td><?php echo formataDatabr($info->data_cadastro) ?></td>
  <td><?php echo $info->nome_livro ?></td>
  <td><?php echo $info->autor_livro ?></td>
  <td><?php echo formataMoeda($info->preco) ?></td>

</tr>

<tr>
  <td colspan="5"><?php echo $info->resumo ?></td>
</tr>

</tbody>
</table>

    </div>
      </main>

      
