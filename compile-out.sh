#!/bin/bash
curl http://ctt-ctt.local/index.php > out/index.php
curl http://ctt-ctt.local/tpl-viaggia-con-noi.php > out/tpl-viaggia-con-noi.php
curl http://ctt-ctt.local/tpl-notizie-index.php > out/tpl-notizie-index.php
curl http://ctt-ctt.local/tpl-notizie.php > out/tpl-notizie.php
curl http://ctt-ctt.local/tpl-notizie-approfondimenti.php > out/tpl-notizie-approfondimenti.php
curl http://ctt-ctt.local/tpl-notizie-approfondimenti-dettaglio.php > out/tpl-notizie-approfondimenti-dettaglio.php
curl http://ctt-ctt.local/tpl-cs.php > out/tpl-cs.php
curl http://ctt-ctt.local/tpl-cs-dettaglio.php > out/tpl-cs-dettaglio.php
curl http://ctt-ctt.local/tpl-area-istituzioni.php > out/tpl-area-istituzioni.php
curl http://ctt-ctt.local/tpl-bandi-gare.php > out/tpl-bandi-gare.php
cp -r css out/
cp ../CAP/css/style.css out/css
cp -r fonts out/
cp -r img out/
cp -r js out/
