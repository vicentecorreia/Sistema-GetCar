<div id="wrapper">

        <?php $this->view('templates/panel_template/navigation'); ?>

    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Deletar Administrador</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php endif; ?>
            <?php if(validation_errors()): ?>
                <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
            <?php endif; ?>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Informações do usuário.
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="text-center"><strong><?php echo $nome; ?></strong></h3>
                                    <?php if($aprovado): ?>
                                        <div class="col-lg-12">
                                            <h4 class="text-center">
                                                <span class="label label-success label-lg">Cadastro aprovado</span>
                                            </h4>
                                        </div>
                                    <?php else: ?>
                                        <div class="col-lg-12">
                                            <h4 class="text-center">
                                                <span class="label label-warning label-lg">Cadastro pendente de aprovação</span>
                                            </h4>
                                        </div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"><strong>Email: </strong><?php echo $email; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"><strong>CPF: </strong><?php echo $cpf; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"><strong>Endereço: </strong><?php echo $endereco; ?></div>
                            </div>
                            <div class="row">

                            </div>
                            <div class="row" style="margin-top: 50px;">
                                <div class="col-lg-12">
                                    <?php echo anchor('painel/usuarios/editar/' . $id, 'Editar', array('class' => 'btn btn-primary')); ?>
                                    <?php echo anchor('painel/usuarios/deletar/' . $id, 'Excluir', array('class' => 'btn btn-danger')); ?>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>