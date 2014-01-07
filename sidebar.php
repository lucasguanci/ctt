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
            <div id="travel-planner" class="box">
              <header>
                <h2>
                  <i class="fa fa-lg fa-code-fork"></i>&nbsp;
                  <a data-toggle="collapse" data-target="#travel-planner-cnt">Calcola percorso</a>
                </h2>
              </header>
              <div class="box-content">
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
                  <i class="fa fa-lg fa-edit"></i>&nbsp;
                  <a data-toggle="collapse" data-target="#travel-planner-cnt">News e avvisi</a>
              </header>
              <!-- avvisi e flash news -->
              <div class="box-content">
                <p>filtra per <a href="#">avvisi</a> | <a href="#">flash news</a></p>
                <!-- 1 -->
                <div class="list-icon">
                  <i class="fa fa-info-circle"></i>&nbsp;
                </div>
                <div class="list-content">
                  <h4>12 giugno 2013</h4
                  <h3>MODIFICA PERCORSO 9</h3>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr...</p> 
                </div>
                <!-- 2 -->
                <div class="list-icon">
                  <i class="fa fa-pencil"></i>&nbsp;
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
