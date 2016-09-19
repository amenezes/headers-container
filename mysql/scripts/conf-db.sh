#!/bin/bash
#cd /opt || exit
mysql -u "root" "-ppassword" "headers" < /opt/headers.sql
