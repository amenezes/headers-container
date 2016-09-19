#!/bin/bash
HEADERS_FILE_SIZE=$(wc -c 'mysql/scripts/headers.sql' | cut -d' ' -f1)
if [ $HEADERS_FILE_SIZE -le 1 ]
  then
    curl -o headers.sql https://dl.dropboxusercontent.com/u/6427240/headers.sql
    mv headers.sql mysql/scripts/headers.sql
  else
    echo "[*] latest version of file <headers.sql> already present."
fi

DCP_PRESENCE=$(find /usr/local/bin -name docker-compose | wc -l)
if [ $DCP_PRESENCE -eq 1 ]
  then
    docker-compose exec mysql bash /opt/conf-db.sh
  else
    echo "[*] some problem happened with script: <db_run.sh> :/"
fi
