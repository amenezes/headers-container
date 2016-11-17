[![Build Status](https://travis-ci.org/amenezes/headers-ui-container.svg?branch=master)](https://travis-ci.org/amenezes/headers-ui-container)
## headers-ui-container
An easy way to up and running a web interface to navigate in data collected by headers core script.  

![alt text](https://github.com/oshp/headers/blob/master/docs/strict-transport-security.png)  

![alt text](https://github.com/amenezes/headers/blob/master/docs/dashboard_sample_page.png)  

![alt text](https://github.com/amenezes/headers/blob/master/docs/worldmap.png)  

## Table of contents
* [Description](#description)
* [Project Structure](#project-structure)  
  * [app](#app)  
  * [data](#data)  
  * [database](#database)  
  * [elk](#elk)
    * [elasticsearch](#elasticsearch)
    * [kibana](#kibana)
  * [mysql](#mysql)  
  * [nginx](#nginx)  
  * [php](#php)
  * [docker-compose](#docker-compose)
* [How to use](#how-to-use)

## Description  
This project provides an easy way to up and running a web interface to navigate in data collected by headers core script.

## Project Structure
### app/
This folder have all PHP, JS and CSS files to run [headers](https://github.com/oshp/headers)-ui.

### data/
A mininum container image for share volume with others containers. Data shared are:
- application files  
`./app/:/var/www/html`
- database data  
`./database/:/var/lib/mysql`

### database/
All database data files.

### elk/
Elasticsearch container image and configuration files more kibana visualization
graphs and dashboard.

#### elasticsearch
Elasticsearch (*2.4.1*) container image.

#### kibana
All individual and dashboard configuration graphs.

### mysql/
MySQL (*5.5.52*) container image.

### nginx/
NGINX (*1.10.1*) container image.

### php/
PHP (*5.6.25*) container image. This container have:
 - php-mysqli; and
 - php-mysqlnd.

IE libraries required to access database instance.

### docker-compose  
The definition file to up and running headers-ui.
 - **_docker-compose.yml_**
 The complete infrastructure to up and running headers-ui with navigation and
 dashboard options available.

 This environment require at least 600mb.  

 - **_docker-compose-without-dashboard.yml_**
This options build a mininum infrastructure necessary to up and running headers-ui
with basic visualization, without dashboard options.  

## How to use

To run the container images it will be necessary a [docker](https://docs.docker.com/engine/installation/) and [docker-compose](https://docs.docker.com/compose/install/) installation.  

With requirements met, just follow the steps below:

- option 1 (**_docker-compose.yml_**)
```bash
$ docker-compose build
$ docker-compose up -d
$ bash db_run.sh #necessary to setup headers database#
```

- option 2 (**_docker-compose-without-dashboard.yml_**)
```bash
$ docker-compose -f docker-compose-without-dashboard.yml build
$ docker-compose -f docker-compose-without-dashboard.yml up -d
$ bash db_run.sh #necessary to setup headers database#
```
