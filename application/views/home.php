<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-car"></i> <span class="light">GETCAR</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#alugar">Alugar Carro</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="#download">Download</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro" style="background: url(<?php echo base_url('assets/img/intro-car.jpg'); ?>) no-repeat bottom center scroll;">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Pegue aqui o seu carro</h1>
                        <p class="intro-text">Veja como é facil alugar um carro.<br/></p>
                        <!-- <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a> -->
                        <a href="#alugar" class="btn btn-primary btn-lg page-scroll" style="width: 500px;">
                            TOQUE AQUI E SAIBA COMO!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="alugar" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-6">
                <h2>Não tem cadastro na GETCAR?</h2>
                <h4><span class="light">Cadastre-se, é </span>facil <span class="light">e</span> rápido!</h4>
                <?php echo anchor('cadastrar', 'CADASTRE-SE', array('class' => 'btn btn-lg btn-primary')); ?>
            </div>
            <div class="col-lg-6">
                <h2>Já é cadastrado?</h2>
                <h4><span class="light">Faça o </span>login</h4>
                <?php echo anchor('login', 'FAZER LOGIN', array('class' => 'btn btn-lg btn-success')); ?>
            </div>
        </div>
    </section>



    <!-- Download Section -->
    <!-- <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Download Grayscale</h2>
                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Alguma dúvida?</h2>
                <p>Fique a vontade para nos deixar uma mensagem!</p>
                <p><a href="mailto:contato@getcar.com.br">contato@getcar.com.br</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>