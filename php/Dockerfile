FROM php:5.6.25-fpm

MAINTAINER alexandre menezes "alexandre.fmenezes@owasp.org"

RUN apt-get update && apt-get install -y \
  php5-mysqlnd

COPY scripts/conf-php.sh /opt/conf-php.sh
COPY scripts/php.ini /usr/local/etc/php/php.ini

RUN ln -s /usr/lib/php5/20131226/mysql.so /usr/local/lib/php/extensions/no-debug-non-zts-20131226/mysql.so
RUN ln -s /usr/lib/php5/20131226/mysqli.so /usr/local/lib/php/extensions/no-debug-non-zts-20131226/mysqli.so
RUN ln -s /usr/lib/php5/20131226/mysqlnd.so /usr/local/lib/php/extensions/no-debug-non-zts-20131226/mysqlnd.so

RUN bash /opt/conf-php.sh
