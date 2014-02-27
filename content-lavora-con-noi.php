<?php
/**
* Content
*/
?>
          <!-- main-content -->
          <div class="col-md-9 col-sm-12 content secondary lavora-con-noi">
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
              <section class="cnt" id="lavora-con-noi-cnt">
                <p>
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                </p>
                <div class="panel-group" id="lavora-con-noi-accordion">
                  <!-- candidatura spontanea  -->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">
                        <a data-toggle="collapse" data-target="#candidatura-spontanea" data-parent="#lavora-con-noi-accordion">Candidatura spontanea</a>
                      </h3>
                    </div>
                    <div id="candidatura-spontanea" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>
                          Per inoltrare la propria candidatura spontanea, compilare il modulo sottostante e allegare eventuale curriculum vitae.
                        </p>
                        <div class="lavora-con-noi form">
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
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /candidatura spontanea  -->
                  <!-- selezioni attive  -->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">
                        <a data-toggle="collapse" data-target="#selezioni-attive" data-parent="#lavora-con-noi-accordion">Selezioni attive</a>
                      </h3>
                    </div>
                    <div id="selezioni-attive" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="lavora-con-noi form">
                          <div class="table-wrapper">
                            <div id="table-selezioni-attive" class="table-responsive">
                              <table class="table table-hover">
                                <tbody>
                                  <!-- header iscrizioni -->
                                  <tr class="header-iscrizioni">
                                    <td>ID</td>
                                    <td>Oggetto</td>
                                    <td>Categoria</td>
                                    <td>Scadenza</td>
                                    <td>Documenti</td>
                                    <td>Iscriviti</td>
                                  </tr>
                                  <!-- iscrizioni generale -->
                                  <tr>
                                    <td>152</td>
                                    <td>
                                      <a href="tpl-lavora-con-noi-attive-form.php">
                                        Selezione per n. 1 autista
                                      </a>
                                    </td>
                                    <td>autista</td>
                                    <td>27/03/2013</td>
                                    <td>
                                      <div class="gara-allegati-sx">
                                        <i class="fa fa-file"></i>
                                      </div>
                                      <div class="gara-allegati-dx">
                                        calendario prove
                                      </div>
                                    </td>
                                    <td class="iscriviti">
                                      <a href="tpl-lavora-con-noi-attive-form.php">
                                        <i class="fa fa-sign-in"></i>
                                      </a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /selezioni attive  -->
                </div>
              </section>
            </article>
          </div>
          <!-- /main-content -->
