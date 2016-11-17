#!/bin/bash
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
