# Created: 2020/11/18 09:09:46

FROM alpine:3.12.1

RUN apk update
RUN apk add openrc 
RUN apk add mysql mysql-client

RUN mkdir "/run/mysq_ld"
RUN chown -R mysql /run/mysq_ld

COPY ./mysql_conf.sql /sverkart.sql /start.sh ./
COPY ./my.cnf /etc/my.cnf

EXPOSE 3306

CMD ["sh", "start.sh"]