#!/bin/bash
#cd /opt || exit
mysql -u "root" "-ppassword" "headers" < headers.sql
