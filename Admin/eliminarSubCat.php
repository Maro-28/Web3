<?php
include_once('navbar.php');
if (isset($_GET['del'])) {
    borrarSubCategoria($_GET['del']);
}
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Eliminar Categoria</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="card-body pad table-responsive">
                </div>
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                ID
                            </th>
                            <th style="width: 20%">
                                Nombre de la categoria
                            </th>
                        </tr>
                    </thead>
                    <?php
                    $arraySubCategoria = obtenerSubsubcategoria();
                    foreach ($arraySubCategoria as $subCategoria) {
                    ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $subCategoria['id'] ?>
                                </td>
                                <td>
                                    <a>
                                        <?php echo $subCategoria['subcategoria'] ?>
                                    </a>
                                    <br />
                                </td>

                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">

                                        </li>
                                    </ul>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-danger btn-sm" href="eliminarSubCat.php?del=<?php echo $subCategoria['id'] ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
</div>
<?php
include_once('footer.php');
?>