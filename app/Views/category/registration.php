<?php echo $this->extend('index'); ?>


<?php echo $this->section('content'); ?>

<div class="container">
    <h1> Registro de Categorias </h1>
    <div class="row" >
        <form method="POST" action="<?php echo base_url()?>categorias/registrar">
            <div class="mb-3">
                <label for="id_categoria" class="form-label">Identificador</label>
                <input type="text" class="form-control" id="id_categoria" name="id_categoria" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="nom_categoria" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nom_categoria" name="nom_categoria" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="desc_categoria" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="desc_categoria" name="desc_categoria" aria-describedby="emailHelp">
            </div>
 
            <button type="submit" class="btn btn-success">Registrar</button>
        </form>
        
    </div>
    
</div>


<?php echo $this->endSection(); ?>

