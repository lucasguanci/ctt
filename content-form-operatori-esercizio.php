<?php
/**
* Content
*/
?>
          <!-- main-content -->
          <div class="col-md-6 col-sm-12 content secondary form-contatti">
            <article>
              <header>
                <h2>
                  GRADUATORIA PER EVENTUALE ASSUNZIONE DI OPERATORI DI ESERCIZIO PAR. 140
                </h2>
                <ul>
                  <li class="condividi">condividi</li>
                  <li><a href="#" data-toggle="tooltip" title="email"><i class="fa fa-envelope-o"></i></a></li>
                  <li class="sep">|</li>
                  <li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                </ul>
              </header>
              <section class="cnt form-contatti">
                <p class="form-operatori-esercizio">
                  Domanda di partecipazione alla selezione per la formazione di una graduatoria per eventuale assunzione di operatori di esercizio par. 140 (ccnl autoferrotranvieri) attraverso ogni forma contrattuale e tipo di prestazione consentite dalle norme vigenti. 
                </p>
                <div class="form-contatti form form-operatori-esercizio">
                  <!-- scelta graduatoria -->
                  <label for="graduatoria">Scelta graduatoria<span class="campo-obbligatorio">*</span></label>
                  <select name="graduatoria">
                    <option value="Livorno">Provincia di Livorno</option> 
                    <option value="Pisa">Provincia di Pisa</option>
                    <option value="Lucca">Provincia di Lucca</option>
                    <option value="MassaCarrara">Provincia di Massa-Carrara</option>
                    <option value="IsolaElba">Isola d'Elba</option>
                  </select>
                  <h2>Dati anagrafici</h2>
                  <!-- cognome -->
                  <label for="cognome">Cognome<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="cognome"  />
                  <!-- nome -->
                  <label for="nome">Nome<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="nome"  />
                  <!-- sesso -->
                  <label for="sesso">Sesso<span class="campo-obbligatorio">*</span></label>
                  <select name="sesso">
                    <option value="M">maschio</option> 
                    <option value="F">femmina</option>
                  </select>
                  <!-- data-nascita -->
                  <label for="data-nascita">Data di nascita<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="data-nascita" placeholder="gg/mm/aaaa" />
                  <!-- comune-nascita -->
                  <label for="comune-nascita">Comune di nascita<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="comune-nascita"  />
                  <!-- provincia-nascita -->
                  <label for="provincia-nascita">Provincia di nascita<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="provincia-nascita"  />
                  <!-- cittadinanza -->
                  <label for="cittadinanza">Cittadinanza<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="cittadinanza"  />
                  <!-- codice-fiscale -->
                  <label for="codice-fiscale">Codice fiscale<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="codice-fiscale"  />
                  <!-- documento-riconoscimento -->
                  <label for="documento">Documento di riconoscimento<span class="campo-obbligatorio">*</span></label>
                  <select name="documento">
                    <option value="ci">carta d'identità</option> 
                    <option value="visa">passaporto</option>
                    <option value="porto-armi">porto d'armi</option>
                    <option value="altro">altro</option>
                  </select>
                  <!-- documento-numero -->
                  <label for="documento-numero">Numero documento di riconoscimento<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="documento-numero"  />
                  <!-- titolo-studio -->
                  <label for="titolo-studio">Titolo di studio<span class="campo-obbligatorio">*</span></label>
                  <select name="titolo-studio">
                    <option value="nessuno">nessuno</option>
                    <option value="licenza-media">licenza media</option>
                    <option value="diploma-scuola-superiore">diploma di scuola superiore</option> 
                    <option value="laurea-vo">laurea v.o.</option> 
                    <option value="laurea-pl">laurea primo livello</option> 
                    <option value="laurea-magistrale">laurea magistrale</option> 
                    <option value="laurea-magistrale-cu">laurea magistrale a ciclo unico</option>
                  </select>
                  <!-- indirizzo-titolo-studio -->
                  <label for="indirizzo-titolo-studio">Indirizzo titolo di studio<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="indirizzo-titolo-studio"  />
                  <!-- comune-residenza -->
                  <label for="comune-residenza">Comune di residenza<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="comune-residenza"  />
                  <!-- cap-residenza -->
                  <label for="cap-residenza">CAP residenza<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="cap-residenza"  />
                  <!-- provincia-residenza -->
                  <label for="provincia-residenza">Provincia di residenza<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="provincia-residenza"  />
                  <!-- indirizzo-residenza -->
                  <label for="indirizzo-residenza">Indirizzo di residenza<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="indirizzo-residenza"  />
                  <p>(solo se diverso da residenza)</p>
                  <!-- comune-domicilio -->
                  <label for="comune-domicilio">Comune di domicilio<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="comune-domicilio"  />
                  <!-- cap-domicilio -->
                  <label for="cap-domicilio">CAP domicilio<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="cap-domicilio"  />
                  <!-- provincia-domicilio -->
                  <label for="provincia-domicilio">Provincia di domicilio<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="provincia-domicilio"  />
                  <!-- indirizzo-domicilio -->
                  <label for="indirizzo-domicilio">Indirizzo di domicilio<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="indirizzo-domicilio"  />
                  <!-- email -->
                  <label for="email">Indirizzo e-mail<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="email"  />
                  <!-- telefono-mobile -->
                  <label for="telefono-mobile">Telefono mobile<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="telefono-mobile"  />
                  <!-- telefono-fisso -->
                  <label for="telefono-fisso">Telefono fisso</label>
                  <input type="text" class="form-control" name="telefono-fisso"  />
                  <h2>Documentazione</h2>
                  <!-- categoria-patente -->
                  <label for="categoria-patente">Categoria patente<span class="campo-obbligatorio">*</span></label>
                  <select name="categoria-patente">
                    <option value="d">D</option> 
                    <option value="de">DE</option>
                  </select>
                  <!-- stato-patente -->
                  <label for="stato-patente">Stato di rilascio patente<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="stato-patente"  />
                  <!-- numero-patente -->
                  <label for="numero-patente">Numero patente<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="numero-patente"  />
                  <!-- data-rilascio-patente -->
                  <label for="data-rilascio-patente">Data di rilascio<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="data-rilascio-patente"  />
                  <!-- data-scadenza-patente -->
                  <label for="data-scadenza-patente">Data di scadenza<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="data-scadenza-patente"  />
                  <!-- numero-cqc -->
                  <label for="numero-cqc">Numero CQC per trasporto persone<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="numero-cqc"  />
                  <!-- stato-rilascio-cqc -->
                  <label for="stato-rilascio-cqc">Stato di rilascio CQC<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="stato-rilascio-cqc"  />
                  <!-- data-rilascio-cqc -->
                  <label for="data-rilascio-cqc">Data di rilascio<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="data-rilascio-cqc"  />
                  <!-- data-scadenza-cqc -->
                  <label for="data-scadenza-cqc">Data di scadenza<span class="campo-obbligatorio">*</span></label>
                  <input type="text" class="form-control" name="data-scadenza-cqc"  />
                  <h2>Dichiarazioni</h2>
                  <!-- dichiarazioni -->
                  <p style="font-weight: bold; font-size:110%;">Dichiaro<span class="campo-obbligatorio">*</span></p>
                  <!-- dichiarazione-1 -->
                  <fieldset class="dichiarazione">
                    <legend class="dichiarazione" for="dichiarazione-1">che la patente di cat. D/DE è in corso di validità</legend>
                    <input type="radio" class="form-control radio" name="dichiarazione-1" value="sì" />
                    <label class="dichiarazione radio">sì&nbsp;</label>
                    <input type="radio" class="form-control radio" name="dichiarazione-1" value="no" checked />
                    <label class="dichiarazione radio">no&nbsp;</label>
                  </fieldset>
                  <!-- dichiarazione-2 -->
                  <fieldset class="dichiarazione">
                    <legend class="dichiarazione" for="dichiarazione-2">che la CQC per trasporto persone è in corso di validità</legend>
                    <input type="radio" class="form-control radio" name="dichiarazione-2" value="sì" />
                    <label class="dichiarazione radio">sì&nbsp;</label>
                    <input type="radio" class="form-control radio" name="dichiarazione-2" value="no" checked />
                    <label class="dichiarazione radio">no&nbsp;</label>
                  </fieldset>
                  <!-- dichiarazione-3 -->
                  <fieldset class="dichiarazione">
                    <legend class="dichiarazione" for="dichiarazione-3">che la patente ha un residuo di punti non inferiore a 15</legend>
                    <input type="radio" class="form-control radio" name="dichiarazione-3" value="sì" />
                    <label class="dichiarazione radio">sì&nbsp;</label>
                    <input type="radio" class="form-control radio" name="dichiarazione-3" value="no" checked />
                    <label class="dichiarazione radio">no&nbsp;</label>
                  </fieldset>
                  <!-- dichiarazione-4 -->
                  <fieldset class="dichiarazione">
                    <legend class="dichiarazione" for="dichiarazione-4">di avere pieno godimento dei diritti civili e politici</legend>
                    <input type="radio" class="form-control radio" name="dichiarazione-4" value="sì" />
                    <label class="dichiarazione radio">sì&nbsp;</label>
                    <input type="radio" class="form-control radio" name="dichiarazione-4" value="no" checked />
                    <label class="dichiarazione radio">no&nbsp;</label>
                  </fieldset>
                  <!-- dichiarazione-5 -->
                  <fieldset class="dichiarazione">
                    <legend class="dichiarazione" for="dichiarazione-5">di non aver riportato condanne penali e di non avere carichi penali pendenti
                    </legend>
                    <input type="radio" class="form-control radio" name="dichiarazione-5" value="sì" />
                    <label class="dichiarazione radio">sì&nbsp;</label>
                    <input type="radio" class="form-control radio" name="dichiarazione-5" value="no" checked />
                    <label class="dichiarazione radio">no&nbsp;</label>
                  </fieldset>
                  <!-- dichiarazione-6 -->
                  <fieldset class="dichiarazione">
                    <legend class="dichiarazione" for="dichiarazione-6">
                      di essere consapevole dell'obbligo dell'accertamento preventivo di idoneita' alla mansione ivi compresi gli accertamenti per etilismo e tossicodipendenza
                    </legend>
                    <input type="radio" class="form-control radio" name="dichiarazione-6" value="sì" />
                    <label class="dichiarazione radio">sì&nbsp;</label>
                    <input type="radio" class="form-control radio" name="dichiarazione-6" value="no" checked />
                    <label class="dichiarazione radio">no&nbsp;</label>
                  </fieldset>
                  <!-- dichiarazione-7 -->
                  <fieldset class="dichiarazione">
                    <legend class="dichiarazione" for="dichiarazione-7">
                      di appartenere alle categorie protette di cui la l. 68/99
                    </legend>
                    <input type="radio" class="form-control radio" name="dichiarazione-7" value="sì" />
                    <label class="dichiarazione radio">sì&nbsp;</label>
                    <input type="radio" class="form-control radio" name="dichiarazione-7" value="no" checked />
                    <label class="dichiarazione radio">no&nbsp;</label>
                  </fieldset>
                  <br>
                  <br>
                  <!-- dichiarazione-8 -->
                  <fieldset class="dichiarazione">
                    <legend class="dichiarazione" for="dichiarazione-8">
                      Accetto le norme e le condizioni contenute nel bando di selezione
                    </legend>
                    <input type="radio" class="form-control radio" name="dichiarazione-8" value="sì" />
                    <label class="dichiarazione radio">sì&nbsp;</label>
                    <input type="radio" class="form-control radio" name="dichiarazione-8" value="no" checked />
                    <label class="dichiarazione radio">no&nbsp;</label>
                  </fieldset>
                  <!-- dichiarazione-9 -->
                  <fieldset class="dichiarazione">
                    <legend class="dichiarazione" for="dichiarazione-9">
                      Acconsento al trattamento dei dati personali ai sensi di quanto previsto dal L.Lgs.196/03 anche per soggetti esterni per le finalità legate alla selezione
                    </legend>
                    <input type="radio" class="form-control radio" name="dichiarazione-9" value="sì" />
                    <label class="dichiarazione radio">sì&nbsp;</label>
                    <input type="radio" class="form-control radio" name="dichiarazione-9" value="no" checked />
                    <label class="dichiarazione radio">no&nbsp;</label>
                  </fieldset>
                  <!-- dichiarazione-10 -->
                  <fieldset class="dichiarazione">
                    <legend class="dichiarazione" for="dichiarazione-10">
                      Mi impegno a consultare il sito per tutte le informazioni e comunicazioni inerenti la selezione sollevando CTT NORD da ogni responsabilità inerente gli obblighi informativi
                    </legend>
                    <input type="radio" class="form-control radio" name="dichiarazione-10" value="sì" />
                    <label class="dichiarazione radio">sì&nbsp;</label>
                    <input type="radio" class="form-control radio" name="dichiarazione-10" value="no" checked />
                    <label class="dichiarazione radio">no&nbsp;</label>
                  </fieldset>
                  <textarea name="privacy" class="form-control" rows="6">
INFORMATIVA PER IL TRATTAMENTO DEI DATI PERSONALI
La presente informativa è resa ai sensi dell’articolo 13 del d.lgs. n. 196/2003 - Codice in materia di protezione dei dati personali.
La candidatura è presentata compilando il form presente in questa pagina e autorizzando CTT NORD srl al trattamento dei propri dati personali.
Il conferimento dei dati è facoltativo. Il rifiuto a fornire i dati comporta l'impossibilità di avanzare la candidatura.
FINALITÀ DEL TRATTAMENTO
I dati personali forniti dagli utenti sono utilizzati al solo fine di presentare la propria candidatura e non saranno comunicati a terzi.
MODALITÀ PER IL TRATTAMENTO DEI DATI
I dati raccolti sono trattati con strumenti informatici e cartacei.
Idonee misure di sicurezza sono osservate per prevenire la perdita dei dati, usi illeciti o non corretti ed accessi non autorizzati. Ogni altra informativa privacy è presente sul sito www.cttnord.it a cui si rimanda.
TITOLARE DEL TRATTAMENTO
Il titolare del trattamento dei dati raccolti è CTT NORD srl che ha sede in Pisa, via Bellatalla, 1 Ospedaletto.
I trattamenti di dati connessi alla candidatura hanno luogo presso la predetta sede e sono curati da personale di CTT NORD srl.
DIRITTI DEGLI INTERESSATI
I soggetti cui si riferiscono i dati personali hanno il diritto in qualunque momento di ottenere la conferma dell'esistenza o meno dei medesimi dati e di conoscerne il contenuto e l'origine, verificarne l'esattezza o chiederne l'integrazione o l'aggiornamento, oppure la rettifica (articolo 7 del Codice in materia di protezione dei dati personali).
Ai sensi del medesimo articolo si ha il diritto di chiedere la cancellazione, la trasformazione in forma anonima o il blocco dei dati trattati in violazione di legge, nonché́ di opporsi in ogni caso, per motivi legittimi, al loro trattamento. I messaggi possono contenere comunicazioni a carattere commerciale in relazione al servizio di trasporto pubblico.
                  </textarea>
                  <input type="submit" class="btn btn-primary" value="Inoltra" style="clear: left">
                  <p class="campi-obbligatori">
                    I campi e le dichiarazioni contrassegnate con l'asterisco sono obbligatorie.
                  </p>                  
                </div>
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