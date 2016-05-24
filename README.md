# WordPress developer's intro to Docker

Run the following command to run the Nginx container:
```
$ docker run -v $(pwd):/var/www/html -p 8080:80 nginx
```

To build and tag the Nginx image, run (note the dot):
```
$ docker build -t my-wordpress .
```

To build and tag the PHP-FOM image, run:
```
$ docker build -t my-php --file Dockerfile.php-fpm .
```

To run the PHP-FPM image in the background, run:
```
$ docker run -v $(pwd):/var/www/html --name my-php -d my-php
```

To run the Nginx image, run:
```
$ docker run -v $(pwd):/var/www/html --link my-php:my-php -p 8080:80 my-wordpress
```

### With docker-compose

To build all the images, run:
```
$ docker-compose build
```

To run the images, run:
```
$ docker-compose up
```
(cancel these with `CTRL + C`)
