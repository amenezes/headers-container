#!/bin/bash
echo "[*] starting database configuration, please wait..."
DCP_PRESENCE=$(find /usr/local/bin -name docker-compose | wc -l)
if [ $DCP_PRESENCE -eq 1 ]
  then
    echo "[+] configuring <mysql>... [1/2]"
    docker-compose exec mysql bash /opt/conf-db.sh
    #docker exec -it mysql /bin/bash /opt/conf-db.sh
    
    echo "[+] configuring <elasticsearch>... [2/2]"
    docker-compose exec elasticsearch bash repo/setup_elasticsearch.sh
  else
    echo "[!] some problem happened with script: <db_run.sh> :/"
fi
