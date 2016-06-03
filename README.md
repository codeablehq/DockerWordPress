# WordPress developer's intro to Docker

In order for this build this image properly, you need to download WordPress (or take an existing install) and copy `wp-content` into this directory, renaming it to just `content` - discard/ignore the WordPress core as it's being downloaded within the image itself.

Next, create two directories named `db` and `redis` and leave them empty. They will be used to store MySQL and Redis database files.

Finally, to build the image, run:
```
$ docker-compose build
```

And then to run the container, use this command:
```
$ docker-compose up
```
(cancel these with `CTRL + C`)

To test it out, open your browser, and navigate to `http://localhost:8080` (or whatever you have set in the `.env` file)
