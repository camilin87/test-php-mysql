#!/bin/sh

docker run --link mysqldb:mysql --rm mysql sh -c \
    'exec mysql -h"$MYSQL_PORT_3306_TCP_ADDR" -P"$MYSQL_PORT_3306_TCP_PORT" -u root -p"$MYSQL_ENV_MYSQL_ROOT_PASSWORD" -e"create database if not exists sampledb;"'

docker run --link mysqldb:mysql --rm mysql sh -c \
    'exec mysql -h"$MYSQL_PORT_3306_TCP_ADDR" -P"$MYSQL_PORT_3306_TCP_PORT" -u root -p"$MYSQL_ENV_MYSQL_ROOT_PASSWORD" -e"show databases;"'
