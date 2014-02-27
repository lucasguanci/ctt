<?php
/**
 * Sidebar
 */
?>
          <!-- sidebar -->
          <div class="col-md-3 sidebar">
            <div class="icons">
              <ul>
                <li><a href="#" data-toggle="tooltip" title="LINEE E ORARI"><i class="fa fa-lg fa-clock-o"></i></a></li>
                <li><a href="#"  data-toggle="tooltip" title="BIGLIETTI E ABBONAMENTI"><i class="fa fa-lg fa-tags"></i></a></li>
                <li><a href="tpl-notizie.php"  data-toggle="tooltip" title="BIGLIETTERIE E RIVENDITE"><i class="fa fa-lg fa-user"></i></a></li>
                <li><a href="#" data-toggle="tooltip" title="AVVISI E NEWS"><i class="fa fa-lg fa-info-circle"></i></a></li>
              </ul>
            </div>
            <div id="secondary-nav" class="box notizie">
              <header>
                <h2>Viaggia con noi</h2>
              </header>
              <div class="box-content secondary-nav">
                <ul>
                  <li><a href="#">Google Transit</a></li>
                  <li><a href="#" class="active">Orari e linee</a></li>
                    <ul>
                      <li><a href="#" class="active">Linee urbane</a></li>
                      <li><a href="#">Linee extraurbane</a></li>
                      <li><a href="#">Servizi a chiamata</a></li>
                      <li><a href="#">Servizi estivi</a></li>
                      <li><a href="#">Servizi scolastici</a></li>
                      <li><a href="#">Noleggio</a></li>
                    </ul>
                  <li><a href="#">Titoli di viaggio</a></li>
                  <li><a href="#">Acquisto titoli di viaggio</a></li>
                  <li><a href="#">Condizioni di viaggio</a></li>
                  <li><a href="#">Carta dei servizi</a></li>
                </ul>
              </div>
            </div>
            <div id="avvisi" class="box">
              <header>
                <h2>
                  <i class="fa fa-lg fa-info-circle"></i>&nbsp;
                  <a data-toggle="collapse" data-target="#avvisi-cnt">News e avvisi</a>
                </h2>
              </header>
              <!-- avvisi e flash news -->
              <div id="avvisi-cnt" class="box-content collapse">
                <p>
                  filtra per territori<br/> 
                  <a href="#">LI</a> | <a href="#">LU</a> | <a href="#">PI</a> | <a href="#">PO</a> | <a href="#">EM</a>
                </p>
                <p>filtra per <a href="#">avvisi</a> | <a href="#">news</a></p>
                <!-- 1 -->
                <div class="list-icon">
                  <i class="fa fa-warning"></i>&nbsp;
                </div>
                <div class="list-content">
                  <h4>12 giugno 2013</h4>
                  <h3>MODIFICA PERCORSO 9</h3>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr...</p> 
                </div>
                <!-- 2 -->
                <div class="list-icon">
                  <i class="fa fa-edit"></i>&nbsp;
                </div>
                <div class="list-content">
                  <h4>6 ottobre 2013</h4>
                  <h3>navetta gratuita</h3>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr...</p> 
                </div> 
              </div>
            </div>
            <!-- /avvisi -->
          </div>
          <!-- /sidebar -->
