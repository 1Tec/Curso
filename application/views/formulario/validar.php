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

<div class="row">

<div class="col-12 col-sm-12">

<?php
echo '<p>' . validation_errors() . '</p>';

?>

</div>


  <div class="col-12 col-sm-12">

    <?php
    echo form_open();


    //Input nome
    echo '<div class="form-group"';
    echo form_label('Nome', 'id_nome');
    echo form_input(array('type' => 'text', 'class' => 'form-control', 'name' => 'nome', 'id' => 'id_nome', 'autocompletar' => 'off', 'placeholde' => 'Nome'));
    echo '</div>';

    //Input email
    echo '<div class="form-group"';
    echo form_label('E-Mail', 'id_email');
    echo form_input(array('type' => 'text', 'class' => 'form-control', 'name' => 'email', 'id' => 'id_email', 'autocompletar' => 'off', 'placeholde' => 'E-Mail'));
    echo '</div>';


    //Input codigo
    echo '<div class="form-group"';
    echo form_label('Código', 'id_codigo');
    echo form_input(array('type' => 'text', 'class' => 'form-control', 'name' => 'codigo', 'id' => 'id_codigo', 'autocompletar' => 'off', 'placeholde' => 'Código'));
    echo '</div>';


        //Input senha
        echo '<div class="form-group"';
        echo form_label('Senha', 'id_senha');
        echo form_input(array('type' => 'password', 'class' => 'form-control', 'name' => 'senha', 'id' => 'id_senha', 'autocompletar' => 'off', 'placeholde' => 'Senha'));
        echo '</div>';

          //Input repetir senha
          echo '<div class="form-group"';
          echo form_label('Repita Senha', 'id_senha2');
          echo form_input(array('type' => 'password', 'class' => 'form-control', 'name' => 'senha2', 'id' => 'id_senha2', 'autocompletar' => 'off', 'placeholde' => 'Repetir Senha'));
          echo '</div>';

    echo form_submit('submit', 'Cadastrar', array('class' => 'btn btn-outline-success'));

    echo form_close();



    ?>

  </div>
</main>