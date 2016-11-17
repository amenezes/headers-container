#!/bin/bash

# -------------- create oshp elasticsearch mapping --------------
#
# notes for elasticsearch 2.4
# type: string
# "geoip_city_name"
#
# ---------------------------------------------------------------
#curl -XPUT 'http://localhost:9200/oshp' -d'{
#    "mappings": {
#        "site": {
#            "_all":  { "enabled": true },
#            "properties": {
#                "rank":  { "type": "integer" },
#                "site":  { "type": "string", "analyzer": "stop" },
#                "url":  { "type": "string", "analyzer": "standard" },
#                "code":  { "type": "short" },
#                "header_name":  { "type": "string", "analyzer": "whitespace" },
#                "header_value":  { "type": "string", "analyzer": "standard" },
#                "ip":  { "type": "ip" },
#                "geoip": {
#                  "properties": {
#                  "city_name":  { "type": "string" },
#                  "continent_code":  { "type": "string" },
#                  "country_code2":  { "type": "string" },
#                  "country_code3":  { "type": "string" },
#                  "country_name":  { "type": "string" },
#                  "dma_code":  { "type": "byte" },
#                  "ip":  { "type": "ip" },
#                  "latitude":  { "type": "float" },
#                  "location":  { "type": "geo_point" },
#                  "longitude":  { "type": "float" },
#                  "postal_code":  { "type": "string" },
#                  "region_code":  { "type": "string" },
#                  "timezone":  { "type": "string" }
#                  }
#                }
#            }
#        }
#    }
#}'

# -------------- create oshp elasticsearch mapping --------------
#
# notes for elasticsearch 5
# type: text
# "geoip.city_name"
#
#curl -XPUT 'http://localhost:9200/oshp' -d'
#{
#  "mappings": {
#    "site": {
#      "_all":  { "enabled": true },
#      "properties": {
#        "rank":  { "type": "integer" },
#        "site":  { "type": "text", "analyzer": "stop" },
#        "url":  { "type": "text", "analyzer": "standard" },
#        "code":  { "type": "short" },
#        "header_name":  { "type": "text", "analyzer": "whitespace" },
#        "header_value":  { "type": "text", "analyzer": "whitespace" },
#        "ip":  { "type": "ip" },
#        "geoip.city_name":  { "type": "text" },
#        "geoip.continent_code":  { "type": "text" },
#        "geoip.country_code2":  { "type": "text" },
#        "geoip.country_code3":  { "type": "text" },
#        "geoip.country_name":  { "type": "text" },
#        "geoip.dma_code":  { "type": "byte" },
#        "geoip.ip":  { "type": "ip" },
#        "geoip.latitude":  { "type": "float" },
#        "geoip.location":  { "type": "geo_point" },
#        "geoip.longitude":  { "type": "float" },
#        "geoip.postal_code":  { "type": "text" },
#        "geoip.region_code":  { "type": "text" },
#        "geoip.timezone":  { "type": "text" }
#      }
#    }
#  }
#}'

# -------------- create kibana index --------------------
#curl -XPUT 'http://localhost:9200/.kibana' -d'
#{
#  "index.mapper.dynamic": true
#}'
#
# --------------- create oshp repository ----------------
curl -XPUT 'http://localhost:9200/_snapshot/oshp' -d '{
    "type": "fs",
    "settings": {
        "location": "/usr/share/elasticsearch/repo/oshp",
        "compress": true
    }
}'
# --------------- restore snapshot data ----------------
curl -XPOST 'http://localhost:9200/_snapshot/oshp/snapshot_2016_2_qtrly/_restore' -d'{
    "indices": "oshp",
    "ignore_unavailable": true,
    "include_global_state": true
}'
