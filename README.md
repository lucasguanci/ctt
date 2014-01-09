Per scambiare le colonne nella versione mobile nel template si modifica l'ordine di comparsa così che rispecchi quella che sarà la visualizzazione nel mobile e poi con uan media-query nel foglio di stile si modifica il layout per la versione desktop.
__template__
<!-- content -->
<div class="col-md-9 floatright content">
  ..
</div>
<!-- /content -->
<div class="clearfix visible-sm visible-xs"></div>
<!-- sidebar -->
<div class="col-md-3 sidebar">
  ..
</div>
<!-- /sidebar -->
__foglio di stile__
/**
 * make possible to exchange columns order on mobile devices, i.e.
 * <div class="col-md-9 floatright">right col on medium sizes</div>
 * <div class="col-md-3">right col on mobile devices</div>
*/
.floatright { float: right; }
@media screen and (max-width: 767px) { .floatright { float: none; } }

# 8 gennaio 2014
- ripristinato ordine colonne (non avviene più lo scambio)
