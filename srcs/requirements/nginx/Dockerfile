FROM debian:buster


RUN apt -y update && apt install -y nginx && apt install openssl -y

#RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
#-keyout /etc/ssl/private/nginx-selfsigned.key \
#-out /etc/ssl/certs/nginx-selfsigned.crt \
#-subj "/C=FR/ST=IDF/L=Paris/O=42/OU=42/CN=vescaffr.42.fr"

#COPY ./conf/default /etc/nginx/sites-available/default

#EXPOSE 443

#CMD ["nginx", "-g", "daemon off;"]

COPY ./tools/script.sh /


CMD [ "/script.sh" ]
