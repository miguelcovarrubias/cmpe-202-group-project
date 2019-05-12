# Docker Instructions

### Build new Docker image from Docker file 
```
docker build -t lamp_app_image .
```
### Run the new created image 

```
docker run -p 8081:80 -t -i lamp_app_image /bin/bash

# start services 
service apache2 start

service mysql start

```

### Download the latest code
```
cd /var/www/example.com/public_html 

rm index.html

git clone https://github.com/miguelcovarrubias/cmpe-202-group-project.git

mv * cmpe-202-group-project/php_card_starter/* .
```

### push the image to Docker Hub to be used in AWS
```
docker tag <image-id> miguelcovarrubias/cmpe202
docker push miguelcovarrubias/cmpe202

```
