<?php
/**
 * Sidebar
 */
?>
          <!-- sidebar -->
          <div class="col-md-3 sidebar">
            <div class="icons">
              <ul>
                <li><a href="#" title="Orari e linee"><i class="fa fa-lg fa-clock-o"></i></a></li>
                <li><a href="#" title="Biglietti"><i class="fa fa-lg fa-ticket"></i></a></li>
                <li><a href="#" title="Avvisi"><i class="fa fa-lg fa-wrench"></i></a></li>
                <li><a href="#" title="Richiesta info"><i class="fa fa-lg fa-rss"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fa fa-lg fa-twitter"></i></a></li>
              </ul>
            </div>
            <div id="secondary-nav" class="box notizie">
              <header>
                <h2>Notizie</h2>
              </header>
              <div class="box-content secondary-nav">
                <ul>
                  <li><a href="tpl-notizie.php">Avvisi</a></li>
                  <li><a href="tpl-notizie.php">Info bus</a></li>
                  <li><a href="tpl-notizie-approfondimenti.php" class="active">Approfondimenti</a></li>
                  <li><a href="#">Comunicati stampa</a></li>
                  <li><a href="#">Promozioni</a></li>
                </ul>
              </div>
            </div>
            <div id="travel-planner" class="box">
              <header>
                <h2>
                  <span class="glyphicon glyphicon-random" style="padding-right: 20px"></span>&nbsp;
                  <a data-toggle="collapse" data-target="#travel-planner-cnt">Travel Planner</a>
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
          </div>
          <!-- /sidebar -->
