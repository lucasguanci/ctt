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
                <h2>Notizie</h2>
              </header>
              <div class="box-content secondary-nav">
                <ul>
                  <li><a href="tpl-notizie.php">Avvisi</a></li>
                  <li><a href="tpl-notizie.php">News</a></li>
                  <li><a href="tpl-notizie-approfondimenti.php" class="active">In evidenza</a></li>
                  <li><a href="#">Convenzioni</a></li>
                  <li><a href="#">Comunicati stampa</a></li>
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
          </div>
          <!-- /sidebar -->
