<?php
/**
* Content
*/
?>
          <!-- main-content -->
          <div class="col-md-9 col-sm-12 content secondary lavora-con-noi selezioni-in-corso-iscriviti">
            <article>
              <header>
                <h2>Lavora con noi</h2>
                <ul>
                  <li class="condividi">condividi</li>
                  <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                  <li class="sep">|</li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
              </header>
              <section class="cnt" id="selezioni-in-corso-iscriviti-cnt">
                <div class="panel-group" id="selezioni-in-corso-iscriviti-accordion">
                  <p>
                    Per inoltrare la propria candidatura per la selezione n. <span class="id-selezione">152</span> è necessario completare la procedura di iscrizione.
                  </p>
                  <!-- già iscritto  -->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">
                        <a data-toggle="collapse" data-target="#iscritto" data-parent="#selezioni-in-corso-iscriviti-accordion">
                          Hai già partecipato a una selezione personale CTT nord?
                        </a>
                      </h3>
                    </div>
                    <div id="iscritto" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="lavora-con-noi selezioni-in-corso-iscriviti iscritto form">
                          <p>
                            Hai già partecipato a una selezione personale CTT, inserisci adesso il tuo codice fiscale.
                          </p>
                          <label for="cf-iscritto">Codice fiscale</label>
                          <input type="text" class="btn btn-default" name="cf-iscritto" placeholder="RSSMRO50B17G999R" />
                          <input type="submit" class="btn btn-primary" value="Carica i dati">
                          <p class="comment">
                            a questo punto viene ricaricato un form uguale a quelo che devono compilare quelli non ancora presenti in archivio con i campi precompilati, decidere se rimangono da selezionare le varie informative privacy etc.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /già iscritto -->
                  <!-- non iscritto  -->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">
                        <a data-toggle="collapse" data-target="#non-iscritto" data-parent="#selezioni-in-corso-iscriviti-accordion">
                          Non hai ancora partecipato a una selezione personale CTT nord?
                        </a>
                      </h3>
                    </div>
                    <div id="non-iscritto" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="lavora-con-noi selezioni-in-corso-iscriviti iscritto form">
                          <p>
                            E' la prima volta che partecipi a una  selezione personale CTT nord, compila il modulo sottostante.
                          </p>
                          <label for="nome">Nome</label>
                          <input type="text" class="btn btn-default" name="nome" placeholder="Mario" />
                          <label for="cognome">Cognome</label>
                          <input type="text" class="btn btn-default" name="cognome" placeholder="Rossi" />
                          <label for="cf">Codice fiscale</label>
                          <input type="text" class="btn btn-default" name="cf" placeholder="RSSMRO50B17G999R" />
                          <label for="indirizzo">Indirizzo</label>
                          <input type="text" class="btn btn-default" name="indirizzo" placeholder="via Torta, 22" />
                          <label for="citta">Citta</label>
                          <input type="text" class="btn btn-default" name="citta" placeholder="Quarrata" />
                          <label for="provincia">Provincia</label>
                          <input type="text" class="btn btn-default" name="provincia" placeholder="PT" />
                          <label for="CAP">CAP</label>
                          <input type="text" class="btn btn-default" name="CAP" placeholder="55555" />
                          <label for="email">Indirizzo email</label>
                          <input type="text" class="btn btn-default" name="email" placeholder="mario@rossi.it" />
                          <label for="telefono">Telefono</label>
                          <input type="text" class="btn btn-default" name="telefono" placeholder="335-18664" />
                          <label for="categoria">Categoria posizione</label>
                          <select name="categoria" class="btn btn-default">
                            <option value="autista">Autista</option>
                            <option value="impiegato">Impiegato</option>
                          </select>
                          <label for="cv">Curriculum vitae</label>
                          <input type="file" class="upload-file btn btn-default" name="cv" />
                          <!-- conservazione cv -->
                          <label for="durata-cv">Durata conservazione curriculum</label>
                          <textarea name="durata-cv" class="btn btn-default">
                            La durata di conservazione del curriculum...
                          </textarea>
                          <input type="checkbox" class="checkbox" id="durata-cv-checkbox" value="checked">
                          <p class="checkbox">
                            Ho letto e accetto i termini e le condizioni..
                          </p>
                          <!-- impegno -->
                          <label class="checkbox" for="impegno">Non impegnativa</label>
                          <textarea name="impegno" class="btn btn-default">
                            La ricezione del  modulo non costituisce impegno...
                          </textarea>
                          <input type="checkbox" class="checkbox" id="impegno-checkbox" value="checked">
                          <p class="checkbox">
                            Ho letto e accetto i termini e le condizioni..
                          </p>
                          <!-- privacy -->
                          <label class="checkbox" for="privacy">Privacy</label>
                          <textarea name="privacy" class="btn btn-default">
                            Pivacy...
                          </textarea>
                          <input type="checkbox" class="checkbox" id="privacy-checkbox" value="checked">
                          <p class="checkbox">
                            Ho letto e accetto i termini e le condizioni..
                          </p>
                          <input type="submit" class="btn btn-primary" value="Invia">
                          <p class="comment">
                            una volta inviato il form viene visualizzata una schermata modal (da sviluppare in seguito) in cui viene detto che riceverà una emaildi conferma iscrizione.
                            l'utente è presente in archivio.
                            l'utente riceverà notifica via email della pubblicazione di nuovi documenti/news sulla selezione a cui ha deciso di partecipare.
                            l'utente riceverà notifica via email di eventuali selezioni per la sua categoria
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /non iscritto -->
                </div>
              </section>
            </article>
          </div>
          <!-- /main-content -->
