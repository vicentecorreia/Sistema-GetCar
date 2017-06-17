<div id="wrapper">

        <?php $this->view('templates/panel_template/navigation'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Usuários</h1>
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
                            Lista de todos os usuários cadastrados
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
                                            <th>CPF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($usuarios as $row): ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo anchor('painel/usuarios/' . $row['id'], $row['nome']); ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['cpf']; ?></td>
                                                
                                            </tr>

                                        <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            <div class="row">
                                    <div class="col-lg-12">
                                        <?php echo anchor('painel/usuarios/adicionar', 'Novo Usuário', array('class' => 'btn btn-primary')); ?>
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