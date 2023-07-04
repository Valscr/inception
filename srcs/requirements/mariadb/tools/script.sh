#!/bin/bash

service mysql start 

echo "CREATE DATABASE IF NOT EXISTS $SQL_DATABASE ;" > create.sql
echo "CREATE USER IF NOT EXISTS '$SQL_USER'@'%' IDENTIFIED BY '$SQL_PWD' ;" >> create.sql
echo "GRANT ALL PRIVILEGES ON $SQL_DATABASE.* TO '$SQL_USER'@'%' ;" >> create.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '12345' ;" >> creeate.sql
echo "FLUSH PRIVILEGES;" >> create.sql

mysql < create.sql

kill $(cat /var/run/mysqld/mysqld.pid)

mysqld
