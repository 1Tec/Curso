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
    echo form_open('site/envio');


$att = array(

  'type' => 'text',
  'name' => 'nome_input',
  'id' => 'id_input',
  'value' => 'valor input',
  'class' => 'form-control'

);
echo form_label('nome', 'id_input');

echo form_input($att);


echo form_label('Caixa de texto', 'id_texto');
echo form_textarea(array('name' => 'texto', 'id'=> 'id_texto', 'class' => 'form-control'));



    echo form_close();



  ?>

</div>
      </main>

      
