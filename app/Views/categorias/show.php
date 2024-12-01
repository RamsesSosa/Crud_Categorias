<!-- View/categoria/create -->

<?php $this->extend("plantilla"); ?>

<?php $this->section("titulo"); ?>
Nueva Categoría
<?php $this->endSection(); ?>

<?php $this->section("content"); ?>
<section class="row">
    <div class="col-12 card">
        <div class="card-header">
            <h3 class="card-title"> <?= $categoria["nombre"]; ?> </h3>
        </div>
        <div class="card-body">
            <ul>
                <li> <b>Nombre:</b> <?= $categoria["nombre"]; ?> </li>
                <li> <b>Descripción:</b> <?= $categoria["descripcion"]; ?> </li>
                <li><b>Usuario ID:</b> <?= $categoria['usuarios_id']; ?></li>
            </ul>
        </div>
    </div>
</section>
<?php $this->endSection(); ?>
