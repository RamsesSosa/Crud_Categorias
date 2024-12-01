<!-- View/categoria/edit -->

<?php $this->extend("plantilla"); ?>

<?php $this->section("titulo"); ?>
Editar Categoría
<?php $this->endSection(); ?>
<?php $this->section("content"); ?>
    <section class="row">
        <div class ="col-12 card">
            <div class="card-header">
                <h3 class="card-title"> Datos de la Categoría</h3>
            </div>
            <div class="card-body">
                <form action="/categorias/<?= $categoria["id"]; ?>/update" method="POST" name="categoriaForm">

                    <div class="mb-3">
                        <label class="form-label" for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" value="<?= $categoria["nombre"]; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" required><?= $categoria["descripcion"]; ?></textarea>
                    </div>

                    <div class="mb-3">
                         <label class="form-label" for="usuarios_id">Usuario ID</label>
                         <input class="form-control" type="number" name="usuarios_id" value="<?= $categoria['usuarios_id']; ?>" required>
                    </div>

                    <button class="btn btn-success" type="submit">Editar</button>

                </form>
            </div>
        </div>
    </section>
<?php $this->endSection(); ?>