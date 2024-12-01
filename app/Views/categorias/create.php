<!-- View/categoria/create -->

<?php $this->extend("plantilla"); ?>

<?php $this->section("titulo"); ?>
Nueva Categoría
<?php $this->endSection(); ?>
<?php $this->section("content"); ?>
    <section class="row">
    <form action="/categorias/store" method="POST" name="categoriaForm">
    <div class ="col-12 card">
            <div class="card-header">
            <h3 class="card-title">Datos</h3>
            </div>
            <div class="card-body">

            <div class="mb-3">
                <label class="form-label" for="nombre">Nombre</label>
                <input class="form-control" type="text" name="nombre" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="descripcion">Descripción</label>
                <textarea class="form-control" name="descripcion" required></textarea>
            </div>

            <div class="mb-3">
        <label class="form-label" for="usuarios_id">Usuario ID</label>
        <input class="form-control" type="number" name="usuarios_id" required>
    </div>

            <button class="btn btn-danger" type="submit">Crear Categoría</button>

            </form>
        </div>

    </section>

<?php $this->endSection(); ?>
