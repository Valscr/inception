FROM debian:buster


RUN apt-get update -y && apt-get install mariadb-server -y

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/

#COPY ./tools/create.sql /

#RUN service mysql start && mysql < create.sql && rm -f create.sql

#EXPOSE 3306

#CMD /usr/bin/mysqld_safe

COPY ./tools/script.sh /

CMD ["/script.sh"]
