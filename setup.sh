# Created: 2020/11/18 09:09:46

minikube start --driver=virtualbox
minikube addons enable metallb

eval $(minikube -p minikube docker-env)
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/metallb.yaml
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"
kubectl apply -f ./srcs/metallb/metallb.yaml

docker build -t nginx ./srcs/nginx ; kubectl apply -f ./srcs/nginx/nginx.yaml
docker build -t mysql ./srcs/mysql ; kubectl apply -f ./srcs/mysql/mysql.yaml
docker build -t phpmyadmin ./srcs/phpmyadmin ; kubectl apply -f ./srcs/phpmyadmin/phpmyadmin.yaml
docker build -t wordpress ./srcs/wordpress ; kubectl apply -f ./srcs/wordpress/wordpress.yaml
docker build -t ftps ./srcs/ftps ; kubectl apply -f ./srcs/ftps/ftps.yaml
docker build -t telegraf ./srcs/telegraf ; kubectl apply -f ./srcs/telegraf/telegraf.yaml
docker build -t influxdb ./srcs/influxdb ; kubectl apply -f ./srcs/influxdb/influxdb.yaml ; kubectl apply -f ./srcs/influxdb/influxdb-conf.yaml ; kubectl apply -f ./srcs/influxdb/volume.yaml ; kubectl apply -f ./srcs/influxdb/vol_d.yaml
docker build -t grafana ./srcs/grafana ; kubectl apply -f ./srcs/grafana/grafana.yaml

echo "<---------->"
echo "|Happy end!|"
echo "<---------->"

# curl -I http://192.168.99.101
# kubectl exec deploy/nginx -- pkill sshd ; kubectl exec deploy/ftps -- pkill vsftpd ; kubectl exec deploy/grafana -- pkill grafana ; kubectl exec deploy/telegraf -- pkill telegraf ; kubectl exec deploy/mysql -- pkill mysqld ; kubectl exec deploy/influxdb -- pkill influxd ; kubectl exec deploy/nginx -- pkill nginx