<?php
/**
* Content
*/
?>
          <!-- main-content -->
          <div class="col-md-6 col-sm-12 content secondary">
            <article>
              <header>
                <h2>Area istituzioni</h2>
                <ul>
                  <li class="condividi">condividi</li>
                  <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                  <li class="sep">|</li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
              </header>
              <section class="cnt">
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                <div class="area-riservata">
                  <label for="area-riservata-uid">Nome utente</label>
                  <br>
                  <input type="text" class="btn btn-default" name="area-riservata-uid" placeholder="mariorossi" />
                  <br>
                  <label for="area-riservata-pwd">Password</label>
                  <br>
                  <input type="password" class="btn btn-default" name="area-riservata-pwd" placeholder="password" />
                  <br>
                  <input type="submit" class="btn btn-primary" value="Accedi">
                  <br>
                  <a href="#" data-toggle="collapse" data-target="#recupero">Hai dimenticato nome utente o password?</a>
                  <div id="recupero" class="collapse recupero">                    
                    <div id="recupero-uid-wrp">
                      <label for="recupero-uid">Recupera nome utente</label>
                      <p class="hint">Se hai dimenticato il nome utente inserisci il tuo indirizzo email</p>
                      <input type="text" class="btn btn-default" name="recupero-uid" placeholder="es. mario@rossi.it" />
                      <br>
                      <input type="submit" class="btn btn-primary" value="Recupera nome utente" />
                    </div>
                    <div id="recupero-pwd-wrp" class="second">
                      <label for="recupero-pwd">Recupera password</label>
                      <p class="hint">Se hai dimenticato la password inserisci il tuo nome utente, ti verrà inviata una nuova password al tuo indirizzo di posta elettronica.</p>
                      <input type="text" class="btn btn-default" name="recupero-pwd" placeholder="es. mariorossi" />
                      <br>
                      <input type="submit" class="btn btn-primary" value="Recupera password" />
                    </div>
                  </div>
                  <br>
                  <a href="#" data-toggle="collapse" data-target="#profilazione">Richiedi accesso al servizio</a>
                  <div id="profilazione" class="collapse profilazione">
                    <p class="intro">
                      Per avere accesso al servizio è necessario registrarsi compilando il modulo seguente.<br>
                      Riceverete conferma dell'avvenura registrazione all'indirizzo di posta elettronica indicato.</p>
                    <!-- nome -->
                    <label for="profilazione-nome" class="first">Nome</label>
                    <br>             
                    <input type="text" class="form-control" name="profilazione-nome" placeholder="mario" />
                    <br>
                    <!-- cognome -->
                    <label for="profilazione-cognome">Cognome</label>
                    <br>             
                    <input type="text" class="btn btn-default" name="profilazione-cognome" placeholder="Rossi" />
                    <br>
                    <!-- qualifica -->
                    <label for="profilazione-qualifica">Qualifica</label>
                    <br>             
                    <input type="text" class="btn btn-default" name="profilazione-qualifica" placeholder="funzionario amministrativo" />
                    <br>
                    <!-- ente -->
                    <label for="profilazione-ente">Ente</label>
                    <br>             
                    <input type="text" class="btn btn-default" name="profilazione-ente" placeholder="Regione Toscana" />
                    <br>
                    <!-- email -->
                    <label for="profilazione-email">Indirizzo email</label>
                    <br>             
                    <input type="text" class="btn btn-default" name="profilazione-email" placeholder="mario@rossi.it" />
                    <br>
                    <!-- telefono -->
                    <label for="profilazione-telefono">Telefono</label>
                    <br>             
                    <input type="text" class="btn btn-default" name="profilazione-telefono" placeholder="055-222222" />
                    <br>
                    <input type="submit" class="btn btn-primary" value="Resistrati" />
                  </div>
                </div>
                </form>
              </section>
            </article>
          </div>
          <!-- /main-content -->
          <!-- right sidebar -->
          <div class="col-md-3 col-sm-12 right-sidebar iscrizione-notizie">
            <div class="box">
              <header>
                <h2><i class="fa fa-rss-square"></i> Notifica notizie</h2>
              </header>
              <div class="box-content">
                <p>
                  Ricevi le notizie direttamente sul tuo cellulare.
                </p>
                <p>
                  <i class="fa fa-chevron-circle-right"></i> Iscriviti al servizio
                </p>
              </div>
            </div>
          </div>
          <!-- /right sidebar -->
