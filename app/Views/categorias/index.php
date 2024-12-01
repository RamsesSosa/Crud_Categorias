<!-- View/categoria/create -->

<?php $this->extend("plantilla"); ?>

<?php $this->section("titulo"); ?>
Nueva Categoría
<?php $this->endSection(); ?>
<?php $this->section("content"); ?>
    <section class="row">
        <div class ="col-12 card">

            <div class="card-header">

            <a href="<?= base_url(); ?>/categorias/create"
             class="btn btn-success btn-sm">
             <i class="bi bi-clipboard2-plus"></i>
             Nueva Categoría
            </a>

            </div>

            <div class="card-body">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th style="width: 40px">Usuario ID</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($categorias as $categoria): ?>  
                    <tr class="align-middle">
                        <td><?= $categoria["id"] ?>  </td>
                        <td><?= $categoria["nombre"] ?>  </td>
                        <td><?= $categoria["descripcion"] ?>  </td>
                        <td><?= $categoria["usuarios_id"] ?>  </td>
                        <td>
                            <a href="<?= base_url( "/categorias/$categoria[id]"); ?>"
                            class="btn btn-warning btn-sn "><i class="bi bi-sunglasses"></i>  </a>

                            <a href="<?= base_url( "/categorias/$categoria[id]/edit"); ?>"
                            class="btn btn-success btn-sn "><i class="bi bi-pencil-square"></i> </a>
                      
                            <button
                            onClick="eliminar(<?= $categoria["id"]; ?>)"
                            class="btn btn-danger btn-sn">
                            <i class="bi bi-trash3"></i>
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function eliminar(id) {
            Swal.fire({
                title: "¿Estás seguro?",
                text: "El registro se eliminará permanentemente",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "¡Sí, eliminar para siempre!"
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href = "<?= base_url(); ?>/categorias/" + id + "/delete"; 
                }
            });
        }
    </script>

<?php $this->endSection(); ?>
