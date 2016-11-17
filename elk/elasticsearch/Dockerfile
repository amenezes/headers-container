FROM elasticsearch:2.4.1

MAINTAINER alexandre menezes "alexandre.fmenezes@owasp.org"

ENV ELASTICSEARCH_HOME /usr/share/elasticsearch
ENV PACKAGE https://dl.dropboxusercontent.com/u/6427240/oshp.tar.gz

COPY scripts/elasticsearch.yml ${ELASTICSEARCH_HOME}/config/elasticsearch.yml
COPY scripts/setup_elasticsearch.sh ${ELASTICSEARCH_HOME}/repo/setup_elasticsearch.sh

WORKDIR ${ELASTICSEARCH_HOME}

RUN mkdir -p repo/oshp

RUN curl -o ${ELASTICSEARCH_HOME}/repo/oshp.tar.gz \
  ${PACKAGE} \
  && cd repo/ \
  && tar xzf oshp.tar.gz \
  && rm oshp.tar.gz \
  && chown -R elasticsearch:elasticsearch oshp/

#ONBUILD RUN sleep 30 && bash ${ELASTICSEARCH_HOME}/repo/setup_elasticsearch.sh
