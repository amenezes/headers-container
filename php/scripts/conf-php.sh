#!/bin/bash
echo "extension=mysql.so" > /usr/local/etc/php/conf.d/mysql.ini
echo "extension=mysqli.so" > /usr/local/etc/php/conf.d/mysqli.ini
echo "extension=mysqlnd.so" > /usr/local/etc/php/conf.d/mysqlnd.ini
