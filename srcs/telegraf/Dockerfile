# Created: 2020/11/18 09:09:46

FROM alpine:3.12.1

RUN apk update
RUN apk add openrc 

ADD https://dl.influxdata.com/telegraf/releases/telegraf-1.16.1_static_linux_amd64.tar.gz /etc/
RUN tar -xzf /etc/telegraf-1.16.1_static_linux_amd64.tar.gz -C /etc/ 
RUN rm -rf /etc/telegraf-1.16.1_static_linux_amd64.tar.gz
RUN mv /etc/telegraf-1.16.1 /telegraf
RUN cp -r telegraf/* / 
RUN rm -rf /telegraf

RUN wget -q -O /etc/apk/keys/sgerrand.rsa.pub https://alpine-pkgs.sgerrand.com/sgerrand.rsa.pub
RUN wget https://github.com/sgerrand/alpine-pkg-glibc/releases/download/2.28-r0/glibc-2.28-r0.apk
RUN apk add glibc-2.28-r0.apk
RUN telegraf -sample-config telegraf.conf --input-filter cpu:mem --output-filter influxdb > telegraf.conf
COPY telegraf.conf /etc/telegraf/

CMD ["telegraf"]