#!/bin/bash
DCP_PRESENCE=$(find /usr/local/bin -name docker-compose | wc -l)
if [ $DCP_PRESENCE -eq 1 ]
  then
    docker-compose exec mysql /opt/conf-db.sh
fi
