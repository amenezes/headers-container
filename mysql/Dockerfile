FROM mysql:5.5.52

MAINTAINER alexandre menezes "alexandre.fmenezes@owasp.org"

ENV PACKAGE https://dl.dropboxusercontent.com/u/6427240/headers.sql

COPY scripts/conf-db.sh /opt/conf-db.sh

RUN apt-get update && apt-get install -y curl

RUN curl -o /opt/headers.sql \
  ${PACKAGE} \
  && apt-get remove -y curl
