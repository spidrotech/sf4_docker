# sf4 angular6 in docker : e-commerce apps !

# download & install composer: https://getcomposer.org/download/ OR curl -s http://getcomposer.org/installer | php

# install project
composer install

# download & install docker : https://docs.docker.com/install/ 

# configure docker env : 
docker-compose up -d

# launch the app :
php bin/console server:run


# Technologies : PHP7, Symfony4, angular, varnish cache, git, docker, rest api