<?php $this->view('templates/shop_template/navigation'); ?>
<div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <?php echo anchor('shop/avaliacao', 'Avaliações', array('class' => 'list-group-item')); ?>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>
            <div class="col-md-9">
            	<h2>Avaliação do sistema</h2>
            	<h4>Sua avaliação é muito inportante porque nos ajuda a melhorar nosso serviço</h4>
                 <?php if($this->session->flashdata('success_avaliacao')): ?>
                 <div class="alert alert-success"> 
                    <?php echo $this->session->flashdata('success_avaliacao'); ?>
                </div>
                <?php endif; ?>
                <?php if(validation_errors()): ?>
                <div class="alert alert-danger"> 
                    <?php echo validation_errors(); ?>
                </div>
                <?php endif; ?>

            	<div class="well">
                    <?php if ($status_avaliacao == null) {?>

                    <?php echo form_open('avaliacao_controller/register_avaliacao'); ?>
                        <div class="form-group">
                            <label>Nível de satisfação</label>
                            <select name="satisfacao" id="satisfacao"  class="form-control">
                                <option value="">Escolha uma opção</option>
                                <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                            </select><br>
                            <label>Comentário</label>
                            <textarea class="form-control" name="comentario" id="comentario" ></textarea>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-1"><div class="form-group">
                            <?php echo form_submit('btn_add_avaliacao', 'Salvar', array('class' => 'btn btn-success')); ?>  
                        </div></div>
                        <div class="col-md-1"><div class="form-group">
                        <?php echo anchor('usuario_controller', 'Voltar', array('class' => 'btn btn-primary')); ?>
                        </div></div>
                        </div>
            
                    <?php echo form_close(); ?>

                    <?php }else{ ?>
                        <h4>Você já avaliou nosso aplicativo</h4>
                        <p><strong>Nota: <?php echo $status_avaliacao['0']['satisfacao']; ?> </strong></p>
                        <p><strong>Comentário: <?php echo $status_avaliacao['0']['comentario']; ?> </strong></p>
            		
                    <?php } ?>
            		
            	</div>
            </div>
        </div>
 </div>