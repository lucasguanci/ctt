#!/bin/bash
curl http://ctt-cap.local/index.php > out/index.php
curl http://ctt-cap.local/tpl-viaggia-con-noi.php > out/tpl-viaggia-con-noi.php
curl http://ctt-cap.local/tpl-notizie-index.php > out/tpl-notizie-index.php
curl http://ctt-cap.local/tpl-notizie.php > out/tpl-notizie.php
curl http://ctt-cap.local/tpl-notizie-approfondimenti.php > out/tpl-notizie-approfondimenti.php
curl http://ctt-cap.local/tpl-notizie-approfondimenti-dettaglio.php > out/tpl-notizie-approfondimenti-dettaglio.php
cp -r css out/
cp -r fonts out/
cp -r img out/
cp -r js out/
