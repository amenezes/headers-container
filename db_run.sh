#!/bin/bash
DCP_PRESENCE=$(find /usr/local/bin -name docker-compose | wc -l)
if [ $DCP_PRESENCE -eq 1 ]
  then
    curl -o headers.sql https://dl.dropboxusercontent.com/u/6427240/headers.sql
    mv headers.sql mysql/scripts/headers.sql
    /usr/local/bin/docker-compose exec mysql bash /opt/conf-db.sh
  else
    echo "[*] some problem happened with script: <db_run.sh> :/"
fi
