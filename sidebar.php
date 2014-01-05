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
                <li><a href="tpl-notizie.php" title="Avvisi"><i class="fa fa-lg fa-wrench"></i></a></li>
                <li><a href="#" title="Richiesta info"><i class="fa fa-lg fa-rss"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fa fa-lg fa-twitter"></i></a></li>
              </ul>
            </div>
            <div id="travel-planner" class="box">
              <header>
                <p><span class="glyphicon glyphicon-random" style="padding-right: 20px"></span>&nbsp;Travel Planner</p>
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
                <p><span class="glyphicon glyphicon-list" style="padding-right: 20px"></span>&nbsp;News e avvisi</p>
              </header>
              <!-- avvisi e flash news -->
              <div class="box-content">
                <p>filtra per <a href="#">avvisi</a> | <a href="#">flash news</a></p>
                <!-- 1 -->
                <div class="list-icon">
                  <span class="glyphicon glyphicon-random"></span>
                </div>
                <div class="list-content">
                  <h4>12 giugno 2013</h4
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
