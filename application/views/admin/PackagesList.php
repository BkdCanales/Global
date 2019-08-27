<body>
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <div>
                <?php if ($this->session->flashdata("error")) : ?>
                    <div class="alert alert-danger">
                        <p><?php echo $this->session->flashdata("error") ?></p>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata("update")) : ?>
                    <div class="alert alert-success">
                        <p><?php echo $this->session->flashdata("update") ?></p>
                    </div>
                <?php endif; ?>
            </div><br />
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Paquetes Disponibles</h3>
                </div>
                <div class="block-content block-content-full">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Paquete</th>
                                <th class="d-none d-sm-table-cell">Precio</th>
                                <th class="text-center" style="width: 100px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($Paquetes)) : ?>
                                <?php foreach ($Paquetes as $Paquete) : ?>
                                    <?php if ($Paquete->rol_id == 4) : ?>
                                        <tr>
                                            <td class="text-center"><?php echo $Usuario->Id; ?></td>
                                            <td class="font-w600"><?php echo $Usuario->FullName; ?></td>
                                            <td class="d-none d-sm-table-cell"><?php echo $Usuario->Email; ?></td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-success">
                                                    <?php if ($Usuario->rol_id == "4") {
                                                        echo "Cliente";
                                                    } ?></span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-popin" value="<?php echo $Usuario->Id; ?>"><span class="fa fa-eye"></span></button>
                                                        <a href="<?php echo base_url() ?>mantenimiento/Usuarios/state/<?php echo $Usuario->Id; ?>" class="btn btn-success btn-remove"><span class="fa fa-plus"></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    <div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popin">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Informacion del Usuario</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="modal-body block-content">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-success" data-dismiss="modal">
                        <i class="fa fa-check"></i> Perfecto
                    </button>
                </div>
            </div>
        </div>
    </div>