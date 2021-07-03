# Created: 2020/11/18 09:09:46

FROM alpine:3.12.1

RUN apk update
RUN apk add openrc
RUN apk add vsftpd
RUN apk add openssl

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=RU/ST=Russia/L=Moscow/O=School21/CN=Sverkart' -keyout /etc/ssl/private/vsftpd.key -out /etc/ssl/certs/vsftpd.crt

RUN adduser -D -h /var/ftp sverkart
RUN echo "sverkart:sverkart" | chpasswd

RUN mkdir -p /var/ftp
COPY ./vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY ./start.sh .
RUN chmod 755 start.sh

EXPOSE  20 21 30000

CMD ["sh", "start.sh"]