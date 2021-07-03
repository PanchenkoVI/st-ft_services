# Created: 2020/11/18 09:09:46

FROM alpine:3.12.1

RUN apk update
RUN apk add openrc
RUN apk add influxdb

EXPOSE 8086

CMD ["influxd"]