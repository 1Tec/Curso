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
    echo form_open('site/enviar');

//Input email
echo '<div class="form-group"';
echo form_label('E-mail', 'id_email');
echo form_input(array('type'=>'text', 'class'=>'form-control', 'name'=>'email', 'id'=>'id_email', 'autocompletar'=>'off'));
echo '</div>';

    //Input email
echo '<div class="form-group"';
echo form_label('Senha', 'id_senha');
echo form_input(array('type'=>'password', 'class'=>'form-control', 'name'=>'senha', 'id'=>'id_senha', 'autocompletar'=>'off'));
echo '</div>';

echo form_submit('submit', 'Logar', array('class'=>'btn btn-outline-success'));

    echo form_close();



  ?>

</div>
      </main>

      
