<div id="wrapper">

        <?php $this->view('templates/panel_template/navigation'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Administradores</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <?php if($this->session->flashdata('success')): ?>
                    <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
                <?php endif; ?>
            </div>
            
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Lista de todos os administradores do sistema
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                                
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>Email</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($administradores as $row): ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['nome']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td>
                                                    <?php   
                                                        //codigo para tratar se o admin é o atual logado
                                                        //if($this->session->userdata('id') != $row['id']): 
                                                    ?>
                                                        <?php echo anchor('painel/administradores/editar/' . $row['id'], 'Editar', array('class' => 'btn btn-primary')); ?>
                                                        <?php echo anchor('painel/administradores/deletar/' . $row['id'], 'Deletar', array('class' => 'btn btn-danger')); ?>
                                                    <?php //else: ?>
                                                        <!-- É você -->
                                                    <?php //endif; ?>
                                                </td>
                                                
                                            </tr>

                                        <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="row">
                                    <div class="col-lg-12">
                                        <?php echo anchor('painel/administradores/adicionar', 'Novo Administrador', array('class' => 'btn btn-primary')); ?>
                                    </div>
                                </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->