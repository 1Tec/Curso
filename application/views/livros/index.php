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
     
     
     
     <table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Data Cadastro</th>
      <th>Nome do Livro</th>
      <th>Autor</th>
      <th>Preço</th>
      <th>Ação</th>
      
    </tr>
    </thead>

    <tbody>

 
   

<?php



foreach ($livros as $livro) {
echo '<tr>
<td>'. $livro->id .'</td>
<td>'. formataDatabr($livro->data_cadastro) .'</td>
<td>'. $livro->nome_livro .'</td>
<td>'. $livro->autor_livro .'</td>
<td>'. formataMoeda($livro->preco) .'</td>
<td>'. anchor('site/info/'. $livro->id, 'info', array('title' => 'Mais Informações', 'class' => 'btn btn-info')) .' 
    '. anchor_popup('site/info/'. $livro->id, 'info', array('title' => 'Mais Informações', 'class' => 'btn btn-success')) .'</td>
 </tr>';
}

?>


<div class="form-group">
      <label for="usr">Data:</label>
      <input type="text"  id="usr">

      <button type="button" class="btn btn-success" onclick=buscar_data()>Buscar Data</button>
    </div>


</tbody>
</table>

    </div>
      </main>

      
