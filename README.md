# st-ft_services (2020/11/18)

## INFO
Ft_services will introduce you to Kubernetes. You will discover cluster management and deployment with Kubernetes. You will virtualize a network and do "clustering".

## TASK
- You must put all the necessary files for the configuration of your server in a folder called srcs.
- Your setup.sh file should be at the root of your repository. This script will setup all your applications.
- The project consists of setting up an infrastructure of different services. To do this, you must use Kubernetes. You will need to set up a multi-service cluster.
Each service will have to run in a dedicated container.
- Each container must bear the same name as the service concerned and for performance reasons, containers have to be build using Alpine Linux.
- Also, they will need to have a Dockerfile written by you which is called in the setup.sh. You will have to build yourself the images that you will use. It is forbidden to take already build images or use services like DockerHub.

You will also have to set up:
- The Kubernetes web dashboard. This will help you manage your cluster.
- The Load Balancer which manages the external access of your services. It will be the only entry point to your cluster. You must keep the ports associated with the. service (IP:3000 for Grafana etc). Load Balancer will have a single ip.
- A WordPress website listening on port 5050, which will work with a MySQL database. Both services have to run in separate containers. The WordPress website will have several users and an administrator. Wordpress needs its own nginx server. The Load Balancer should be able to redirect directly to this service.
- phpMyAdmin, listening on port 5000 and linked with the MySQL database. Php- MyAdmin needs its own nginx server. The Load Balancer should be able to redirect directly to this service.
- A container with annginx server listening on ports 80 and 443. Port 80 will be in http and should be a systematic redirection of type 301 to 443, which will be in https. The page displayed does not matter as long as it is not an http error.
- A Grafana platform, listening on port 3000, linked with an InfluxDB database. Grafana will be monitoring all your containers. You must create one dashboard per service. InfluxDB and grafana will be in two distincts containers.
- In case of a crash or stop of one of the two database containers, you will have to make shure the data persist.
- All your containers must restart in case of a crash or stop of one of its component parts.
- Make sure that each redirection toward a service is done using a load balancer. FTPS, Grafana, Wordpress, PhpMyAdmin and nginx???s kind must be "LoadBalancer".
- Influxdb and MySQL???s kind must be "ClusterIP". Other entries can be present, but none of them can be of kind "NodePort".

## MAKE
bash setup.sh

curl -I http://192.168.99.101

kubectl exec deploy/nginx -- pkill sshd ; kubectl exec deploy/ftps -- pkill vsftpd ; kubectl exec deploy/grafana -- pkill grafana ; kubectl exec deploy/telegraf -- pkill telegraf ; kubectl exec deploy/mysql -- pkill mysqld ; kubectl exec deploy/influxdb -- pkill influxd ; kubectl exec deploy/nginx -- pkill nginx

## Additional Information
https://ru.wikipedia.org/wiki/Kubernetes

https://kubernetes.io/ru/

### NGINX:
https://nginx.org/ru/
https://ru.wikipedia.org/wiki/Nginx

### MYSQL:
https://ru.wikipedia.org/wiki/MySQL
https://metanit.com/sql/mysql/

### PHPADMIN:
https://www.phpmyadmin.net/

### WORDPRESS:
https://ru.wordpress.org/
https://ru.wikipedia.org/wiki/WordPress

### FTPS:
https://ru.wikipedia.org/wiki/FTPS
https://habr.com/ru/post/500438/

### TELEGRAF and INFLUXDB:
https://www.influxdata.com/time-series-platform/telegraf/

### GRAFANA
https://grafana.com/
