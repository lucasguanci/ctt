#!/bin/bash
curl http://ctt-ctt.local/index.php > out/index.html
curl http://ctt-ctt.local/tpl-viaggia-con-noi.php > out/tpl-viaggia-con-noi.html
curl http://ctt-ctt.local/tpl-notizie-index.php > out/tpl-notizie-index.html
curl http://ctt-ctt.local/tpl-notizie.php > out/tpl-notizie.html
curl http://ctt-ctt.local/tpl-notizie-approfondimenti.php > out/tpl-notizie-approfondimenti.html
curl http://ctt-ctt.local/tpl-notizie-approfondimenti-dettaglio.php > out/tpl-notizie-approfondimenti-dettaglio.html
curl http://ctt-ctt.local/tpl-cs.php > out/tpl-cs.html
curl http://ctt-ctt.local/tpl-cs-dettaglio.php > out/tpl-cs-dettaglio.html
curl http://ctt-ctt.local/tpl-area-istituzioni.php > out/tpl-area-istituzioni.html
curl http://ctt-ctt.local/tpl-bandi-gare.php > out/tpl-bandi-gare.html
curl http://ctt-ctt.local/tpl-lavora-con-noi.php > out/tpl-lavora-con-noi.html
curl http://ctt-ctt.local/tpl-lavora-con-noi-selezioni-in-corso-iscriviti.php > out/tpl-lavora-con-noi-selezioni-in-corso-iscriviti.html
curl http://ctt-ctt.local/tpl-form-nim.php > out/tpl-form-nim.html
curl http://ctt-ctt.local/tpl-form-operatori-esercizio.php > out/tpl-form-operatori-esercizio.html


cp -r css out/
cp ../CAP/css/style.css out/css
cp -r fonts out/
cp -r img out/
cp -r js out/
