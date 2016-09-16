#!/bin/bash
CURL_PRESENCE=$(find /usr/bin -name curl | wc -l)
if [ $CURL_PRESENCE -eq 1 ]
  then
    /usr/bin/curl -o headers.sql https://dl.dropboxusercontent.com/u/6427240/headers.sql
    mv headers.sql mysql/scripts/headers.sql
  else
    echo "[*] some problem happened with script: <get_db_data.sh> :/"
fi
