<?php
/**
* Header file
*/
?>
    <!-- header -->
    <section class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12 header-left">
            <a href="index.php"><img id="logo" src="img/logo-CTT-compagnia-toscana-trasporti.png" alt="logo CAP autolinee" /></a>
          </div>          
          <div class="col-md-6 col-xs-12 header-right">
            <div class="row search">
              <nav class="navbar navbar-default" role="navigation">
                <ul class="nav navbar-nav">
                  <li><a id="wb" href="index.php">alto contrasto</a></li>
                  <li class="active"><a href="#">IT</a></li>
                  <li><a href="#">EN</a></li>
                  <li>
                    <button class="btn bt-default search">
                      <span class="glyphicon glyphicon-search" style="padding-right: 4px"></span>&nbsp;
                      cerca
                    </button>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="clear"></div>
            <div class="row aree-riservate">
              <nav class="navbar navbar-default" role="navigation">
                <ul class="nav navbar-nav">
                  <li><a href="#">Area personale</a></li>
                  <li><a href="tpl-area-istituzioni.php">Area istituzioni</a></li>
                  <li><a href="#">Area fornitori</a></li>
                  <li><a href="tpl-lavora-con-noi.php">Lavora con noi</a></li>
                  <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-lg fa-twitter"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- banner -->
          <div class="col-md-12 banner">
            <div id="banner" class="carousel slide" data-ride="carousel" data-interval="5000">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#banner" data-slide-to="0" class="active"></li>
                <li data-target="#banner" data-slide-to="1"></li>
                <li data-target="#banner" data-slide-to="2"></li>
              </ol>
              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/banner-ctt-pisa.jpg" alt="CTT Compagnia Toscana Trasporti - Pisa">
                  <div class="carousel-caption">
                    <h3>Pisa</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                  </div>
                </div>
                <div class="item">
                  <img src="img/banner-ctt-livorno.jpg" alt="CTT Compagnia Toscana Trasporti - Livorno">
                  <div class="carousel-caption">
                    <h3>Livorno</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                  </div>
                </div>
                <div class="item">
                  <img src="img/banner-ctt-lucca.jpg" alt="CTT Compagnia Toscana Trasporti - Lucca">
                  <div class="carousel-caption">
                    <h3>Lucca</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /banner -->
        </div>
        <div class="row">
          <div class="col-md-12 main-nav">
            <nav class="navbar navbar-default" role="navigation">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">CTT nord <span style="font-size: 90%">&ndash; Compagnia Toscana Trasporti</span></a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="#">Azienda</a></li>
                  <li><a href="tpl-viaggia-con-noi.php">Viaggia con noi</a></li>
                  <li><a href="#">Parla con noi</a></li>
                  <li><a href="tpl-notizie-index.php">Notizie</a></li>
                </ul>
              </div>
              <!-- /.navbar-collapse -->
            </nav>
          </div>
        </div>
      </div>
    </section>    
    <!-- /header -->