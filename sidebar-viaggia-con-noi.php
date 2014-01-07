<?php
/**
 * Sidebar
 */
?>
          <!-- sidebar -->
          <div class="col-md-3 sidebar">
            <div class="icons">
              <ul>
                <li><a href="#" data-toggle="tooltip" title="Linee e orari"><i class="fa fa-lg fa-clock-o"></i></a></li>
                <li><a href="#"  data-toggle="tooltip" title="Biglietti e abbonamenti"><i class="fa fa-lg fa-ticket"></i></a></li>
                <li><a href="tpl-notizie.php"  data-toggle="tooltip" title="Biglietterie e rivendite"><i class="fa fa-lg fa-building-o"></i></a></li>
                <li><a href="#" data-toggle="tooltip" title="Avvisi e news"><i class="fa fa-lg fa-rss"></i></a></li>
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
            <div id="travel-planner" class="box">
              <header>
                <h2>
                  <i class="fa fa-lg fa-code-fork"></i>&nbsp;
                  <a data-toggle="collapse" data-target="#travel-planner-cnt">Calcola percorso</a>
                </h2>
              </header>
              <div id="travel-planner-cnt" class="box-content collapse">
                <ul>
                  <li><a href="#" class="active">Percorso</a></li>
                  <li><a href="#">Dove sono</a></li>
                </ul>
                <form>
                  <label for="partenza">Partenza</label><br> 
                  <input class="btn btn-default" name="partenza" placeholder="piazza Duomo">
                  <br>
                  <label for="partenza">Destinazione</label><br>
                  <input class="btn btn-default" name="partenza" placeholder="via Marradi 10">
                </form>
              </div>
            </div>
            <div id="avvisi" class="box">
              <header>
                <h2>
                  <span class="glyphicon glyphicon-list" style="padding-right: 20px"></span>&nbsp;
                  <a data-toggle="collapse" data-target="#avvisi-cnt">News e avvisi</a>
                </h2>
              </header>
              <!-- avvisi e flash news -->
              <div id="avvisi-cnt" class="box-content collapse">
                <p>filtra per <a href="#">avvisi</a> | <a href="#">flash news</a></p>
                <!-- 1 -->
                <div class="list-icon">
                  <span class="glyphicon glyphicon-random"></span>
                </div>
                <div class="list-content">
                  <h4>12 giugno 2013</h4>
                  <h3>MODIFICA PERCORSO 9</h3>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr...</p> 
                </div>
                <!-- 2 -->
                <div class="list-icon">
                  <span class="glyphicon glyphicon-random"></span>
                </div>
                <div class="list-content">
                  <h4>6 ottobre 2013</h4>
                  <h3>navetta gratuita</h3>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr...</p> 
                </div> 
              </div>
            </div>
          </div>
          <!-- /sidebar -->
