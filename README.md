# WordPress developer's intro to Docker

Run the following command to run the Nginx container:
```
$ docker run -v $(pwd):/usr/share/nginx/html -p 8080:80 nginx
```
