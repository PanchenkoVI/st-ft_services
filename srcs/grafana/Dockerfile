# Created: 2020/11/18 09:09:46

FROM alpine:3.12.1

RUN apk update
RUN apk add openrc 
RUN apk add grafana --repository=http://dl-3.alpinelinux.org/alpine/edge/testing/

COPY ./start.sh /
COPY ./grafana.ini /usr/share/grafana/conf/custom.ini
COPY ./datasources.yaml /usr/share/grafana/conf/provisioning/datasources/influxdb.yaml
COPY ./dashboards.yaml /usr/share/grafana/conf/provisioning/dashboards/influxdb.yaml

RUN mkdir -p /var/lib/grafana_db/
COPY ./dashboard.json /var/lib/grafana_db/

EXPOSE 3000

CMD ["sh", "start.sh"]