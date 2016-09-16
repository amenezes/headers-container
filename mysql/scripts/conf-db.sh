#!/bin/bash
cd /opt || exit
/usr/bin/mysql -u "root" "-ppassword" "headers" < headers.sql
