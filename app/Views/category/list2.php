<?php echo $this->extend('index'); ?>


<?php echo $this->section('content'); ?>

<div class="container">
    <h1> Listado de Categorias </h1>
    <div class="row" >
        <div class="col-12" align="right">
            <a href="" class="btn btn-primary">Añadir</a> <br><br> 
        </div>
    </div>
    

    <table class="table" border='2'>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción </th>
                <th scope="col" colspan=2 > <div align="center"> Opciones </div></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data as $c): ?>
                <tr>
                    <td> <?php echo $c->id ?> </td>
                    <td> <?php echo $c->nom_categoria ?> </td>
                    <td> <?php echo $c->desc_categoria ?> </td>

                    <td> <a href="" class="btn btn-success">Editar</a></td>
                    <td> <a href="" class="btn btn-danger">Eliminar</a> </td>
                </tr>
        <?php endforeach; ?> 
        </tbody>
    </table>
</div>


<?php echo $this->endSection(); ?>

