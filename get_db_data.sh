#!/bin/bash
wget -o headers.sql -c https://dl.dropboxusercontent.com/u/6427240/headers.sql
mv headers.sql mysql/scripts/headers.sql
